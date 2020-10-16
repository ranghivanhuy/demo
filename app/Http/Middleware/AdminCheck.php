<?php
/**
 * Name of Admin
 * 
 * @category AdminCheck
 * @package  App\Http\Middleware
 * @author   ranghivanhuy <ranghivanhuy@gmail.com>
 * @license  The MIT License (MIT) Copyright © ranghivanhuy
 * @version  7.4.10
 * @link     https://github.com/appleluong1905/nta_intern102020_backend
 */
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

/**
 * Name of Admin
 * 
 * @category AdminCheck
 * @package  App\Http\Middleware
 * @author   ranghivanhuy <ranghivanhuy@gmail.com>
 * @license  The MIT License (MIT) Copyright © ranghivanhuy
 * @link     https://github.com/appleluong1905/nta_intern102020_backend
 */
class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request checkadmin
     * @param Closure $next    next to page
     * 
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $roleUser =  Auth::user()->roles->pluck('name');
        if (!$roleUser->contains('admin')) {
            return redirect('/nopermission');
        }
        return $next($request);
    }
}
