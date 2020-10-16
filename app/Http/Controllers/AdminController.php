<?php
/**
 * Name of Admin
 * 
 * @category ADminController
 * @package  App\Http\Controller
 * @author   ranghivanhuy <ranghivanhuy@gmail.com>
 * @license  The MIT License (MIT) Copyright © ranghivanhuy
 * @version  7.4.10
 * @link     https://github.com/appleluong1905/nta_intern102020_backend
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Show view
 * 
 * @category AdminController
 * @package  App\Http\Controller
 * @author   ranghivanhuy <ranghivanhuy@gmail.com>
 * @license  The MIT License (MIT) Copyright © ranghivanhuy
 * @link     https://github.com/appleluong1905/nta_intern102020_backend
 */
class AdminController extends Controller
{
    /**
     * Show home 
     * 
     * @return void
     */
    public function home() 
    {
        return view('index');
    }
    /**
     * Show admin page
     * 
     * @return void
     */
    public function admin() 
    {
        return view('page.admin');
    }
    /**
     * Show user page 
     * 
     * @return void
     */
    public function user()
    {
        return view('page.user');
    }
    /**
     * Show nopermisison page 
     * 
     * @return void
     */
    public function nopermission()
    {
        return view('page.nopermission');
    }
}
