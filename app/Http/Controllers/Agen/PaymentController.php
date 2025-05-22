<?php

namespace App\Http\Controllers\Agen;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PaymentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if ($request->ajax()) {
            $payment = Payment::with('client');

            return DataTables::eloquent($payment)
                ->addIndexColumn()
                ->addColumn('priode', function ($row) {
                    return  date_format($row->start_date, 'Y-M-d')  . ' - ' .  date_format($row->end_date, 'Y-M-d');
                })
                ->addColumn('status', function ($row) {
                    switch ($row->status) {
                        case 'Paid':
                            return "<span class='badge text-[3px] fw-semibold rounded-pill bg-success px-20 py-6 radius-4 text-white'>" . $row->status . "</span>";
                            break;
                        default:
                            return "<span class='badge text-[3px] fw-semibold rounded-pill bg-secondary px-20 py-6 radius-4 text-white'>" . $row->status . "</span>";
                            break;
                    }
                })
                ->rawColumns(['status', 'priode'])
                ->toJson();
        }
    }
}
