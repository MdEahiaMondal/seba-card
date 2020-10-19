<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\CommonController\CommonController;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use function GuzzleHttp\Psr7\uri_for;

class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders = Slider::all();
        return view('backend.sliders.index', compact('sliders'));
    }


    public function create()
    {
        return view('backend.sliders.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ]);

        $slug = Str::slug($request->title);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $image_name = CommonController::fileUploaded(
                $slug, false, $image, 'sliders', ['width' => '1347', 'height' => '448']
            );
            $request['image'] = $image_name;
        }

        $request['slug'] = $slug;

        $only = $request->only('title', 'slug', 'image', 'status');
        Slider::create($only);

       return back()->with('successMsg', 'স্লাইডার সফলভাবে তৈরি করা হয়েছে');
    }


    public function show(Slider $slider)
    {
        //
    }


    public function edit(Slider $slider)
    {
        return view('backend.sliders.edit', compact('slider'));
    }


    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $slug = Str::slug($request->title);
        if ($request->hasFile('photo')) {
            $request->validate(['photo' => 'required|mimes:jpg,jpeg,bmp,png|max:1024']);
            $image = $request->file('photo');
            $image_name = CommonController::fileUploaded(
                $slug, false, $image, 'sliders', ['width' => '1347', 'height' => '448'], $slider->image
            );
            $request['image'] = $image_name;
        }else{
            $request['image'] = $slider->image;
        }
        $request['status'] = $request->status ?? 0;
        $request['slug'] = $slug;

        $only_go = $request->only(['title', 'slug', 'image', 'status']);
        $slider->update($only_go);

        return redirect()->route('sliders.index')->with('successMsg', 'স্লাইডার সফলভাবে আপডেট হয়েছে');
    }


    public function destroy(Slider $slider)
    {
        if ($slider->image){
            CommonController::deleteImage('sliders', $slider->image);
        }
        $slider->delete();
        return redirect()->route('sliders.index')->with('successMsg', 'স্লাইডার সফলভাবে মুছে ফেলা হয়েছে');
    }

    public function changeStatus(Slider $slider){

        $slider->status = !$slider->status;
        $slider->save();

        return redirect()->back()->with('successMsg', 'স্লাইডার প্রকাশনার অবস্থা সফলভাবে পরিবর্তন হয়েছে');
    }

}
