<?php

namespace App\Http\Controllers;

use App\Home;
use App\Http\Requests\SaveHome;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    public function create()
    {
        return view('home.create');
    }

    public function save(SaveHome $request)
    {
        $home = new Home();

        try
        {
            $home->name               = $request->name;
            $home->phone_number       = $request->phone_number;
            $home->address            = $request->address;
            $home->address_details     = $request->address_details;
            $home->location_latitude  = $request->location_lat;
            $home->location_longitude = $request->location_lng;
            $home->created_by         = Auth::user()->id;

            $home->save();

            Auth::user()->home_id = $home->id;
            Auth::user()->save();
            return redirect()->route('my_home');
        }
        catch(QueryException $qe)
        {
            return redirect()->back()->withErrors(['exception' => 'Database Exception: '.$qe->getMessage()])->withInput();
        }
        catch(\Throwable $fe)
        {
            return redirect()->back()->withErrors(['exception' => 'Database Exception: '.$fe->getMessage()])->withInput();
        }
        catch(\Exception $e)
        {
            return redirect()->back()->withErrors(['exception' => 'General Exception: '.$e->getMessage()])->withInput();
        }
    }
}
