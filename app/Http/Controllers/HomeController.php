<?php

namespace App\Http\Controllers;

use App\Models\Overseer;
use App\Models\Slider;
use App\Models\Union;
use App\Models\Upazila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $upazilas = Upazila::all()->count();
        $sliders = Slider::all()->count();
        $unions = Union::all()->count();
        $overseers = Overseer::all()->count();

        return view('home', compact('upazilas', 'sliders', 'unions', 'overseers'));
    }
}
