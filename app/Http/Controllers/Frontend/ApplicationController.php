<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function districtSelect(Request $request){
        $districts = DB::table('districts')->select( 'id', 'bn_name')->where('division_id', $request->division_id)->get();
        return $districts;
    }

    public function upazilaSelect(Request $request){
        $upazilas = DB::table('upazilas')->select( 'id', 'bn_name')->where('district_id', $request->district_id)->get();
        return $upazilas;
    }

    public function unionSelect(Request $request){
        info($request);
        $unions = DB::table('unions')->select( 'id', 'bn_name')->where('upazilla_id', $request->upazila_id)->get();
        return $unions;
    }

    public function index()
    {
        //
    }


    public function create()
    {
        $divisions = DB::table('divisions')->get();
        return view('frontend.application_form.basic_form', compact('divisions'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Application $application)
    {
        //
    }


    public function edit(Application $application)
    {
        //
    }


    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
