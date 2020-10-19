<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Overseer;
use App\Models\Slider;
use App\Models\Union;
use App\Models\Upazila;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        $sliders = Slider::active()->get();

        return view('welcome', compact( 'sliders'));
    }
}
