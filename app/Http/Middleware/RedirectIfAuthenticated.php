<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        // dd(Auth::check(), Auth::user(), session()->all());
        if (Auth::check()) {

            $subdomain = explode('.', $request->getHost())[0];
            // ถ้าเป็น admin ให้ redirect ไป admin dashboard
            if ($subdomain === 'admin') {
                return redirect()->route('admin.dashboard');
            }
            // ถ้าเป็น employee ให้ redirect ไป employee dashboard
            elseif ($subdomain === 'employee') {
                return redirect()->route('employee.dashboard');
            }

            // ถ้าไม่ใช่ subdomain ที่กำหนด (กรณีพิเศษ)
            return redirect('/');
        }

        return $next($request);
    }
}
