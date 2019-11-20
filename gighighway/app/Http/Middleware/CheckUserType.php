<?php

namespace GigHighway\Http\Middleware;

use Closure;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if(auth()->user()->type == 'Vendor'){

		return $next($request);

		}

			return redirect(‘home’)->with(‘error’,’You have not Vendor access’);
    }
}
