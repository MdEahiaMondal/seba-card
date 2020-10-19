<?php

namespace App\Http\Controllers;

use App\Models\Application;
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

        return view('home', compact('upazilas', 'sliders', 'unions'));
    }



    public function listOfApplications(Request $request)
    {
        $perPage = $request->perPage ?: 10;
        $keyword = $request->keyword;

        $applications = Application::with(
            'division',
            'district',
            'upazila',
            'union',
        );

        if ($keyword) {

            $keyword = '%' . $keyword . '%';

            $applications = $applications->where('name', 'like', $keyword)
                ->orWhere('phone', 'like', $keyword)
                ->orWhere('nid_no', 'like', $keyword)
                ->orWhere('father_name', 'like', $keyword)
                ->orWhere('village_name', 'like', $keyword)
                ->orWhere('word_no', 'like', $keyword)
                ->orWhere('holding_no', 'like', $keyword);

        }

        $applications = $applications->latest()->paginate($perPage);
        return view('backend.applications.all_list', compact('applications'));
    }



    public function listOfApplicationsShow($id){
        $application = Application::findOrFail($id);
        return view('backend.applications.show', compact('application'));
    }



}
