<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        /*
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }*/
        $userData = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        $url = 'http://localhost:4000/users';
        $response = Http::get($url);
        $done=0;
        foreach ($response as $item){
            if(($userData['email']==$item->email)and($userData['password']==$item->password)){
                $done=1;
            }
            else{
                $done=0;
            }
        }
        if ($done==1){
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
