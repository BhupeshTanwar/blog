<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "Age Check";
        //echo "<pre>";
        //print_r($request->age);
        // if($request->age<18){
        //     die("You can not visit this site");
        // }
        //echo "Print from agecheck Middleware";
        return $next($request);
    }
}
