<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class BankMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $bank = Bank::where('user_id', Auth::user()->id)->first();
        if ($bank === null) {
            Alert::alert('Peringatan', 'Silahkan melengkapi data Bank Transfer terlebih dahulu', 'warning');
            return redirect()->route('agen.bank');
        }

        return $next($request);
    }
}
