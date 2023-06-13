<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HogeMiddleware
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
    file_put_contents('C:\data\access2.log', date('Y-m-d H:i:s'), FILE_APPEND);
    return $next($request);
  }
}
