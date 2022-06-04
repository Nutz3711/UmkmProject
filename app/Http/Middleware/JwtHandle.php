<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JwtHandle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (strpos($request->headers->get("Authorization"),"Bearer ") === false) {
            if(!Auth::check()){
                return response()->json([
                    'status'=>false,
                    'message'=>'Unauthorized'
                ]);
            }else{
                $response = $next($request);

                return $response;
            }
        }

        $response = $next($request);

        return $response;
    }
}
