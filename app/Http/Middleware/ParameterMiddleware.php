<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Agen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\Encryption\DecryptException;

class ParameterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->query('regis')) {
            try {
                $param = Crypt::decrypt($request->query('regis'));
                $cek = Agen::where('no_telp', $param['no_telp'])->exists();
                if ($cek) {
                    return $next($request);
                }
            } catch (DecryptException $e) {
                return redirect()->route('keagenan');
            }
        }
        return $next($request);
    }
}
