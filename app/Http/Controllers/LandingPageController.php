<?php
/**
 * Created by PhpStorm.
 * User: Ash
 * Date: 1/24/2018
 * Time: 12:47 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        if(Auth::user()->home !== null)
        {
            return redirect()->route('my_home');
        }

        return view('landingPage.index');
    }
}