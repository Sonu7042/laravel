<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //global middleware
        // echo "<pre>";
        // print_r($request->age);
        // if($request->age<18){
        //     die ("You are not eligible to access this page");
        // }

        // echo "age checker";


        //group middleware
        if($request->age< 18){
            die('you are under age 18 you can not access it');
        }

        return $next($request);
    }
}
