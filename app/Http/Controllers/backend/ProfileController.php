<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\CommonController\CommonController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.profile.index');
    }


    public function update(Request $request, User $user)
    {
        if ($request->info){
            $this->validate($request, [
               'name' => 'required',
               'email' => 'required',
                'photo' => 'nullable|mimes:jpg,jpeg,bmp,png|max:1024',
            ]);

            $user = Auth::user();

            $slug = Str::slug($request->name);

            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $image_name = CommonController::fileUploaded(
                    $slug, false, $image, 'users', ['width' => '390', 'height' => '210']
                    ,$user->image
                );
                $request['image'] = $image_name;
            }else{
                $request['image'] = Auth::user()->image;
            }

            $only = $request->only([
                'name', 'email', 'image'
            ]);
            $user->update($only);

            return back()->with('successMsg', 'প্রোফাইল সফলভাবে হালনাগাদ করা হয়েছে');
        }else{
            $this->validate($request, [
               'current_password' => 'required',
               'password' => 'required|confirmed',
            ]);

            $user = Auth::user();

            if ($user){
                if (Hash::check($request->current_password , Auth::user()->password)) {
                    if (!Hash::check($request->password , Auth::user()->password)) {
                        $user->password = Hash::make($request->password);
                        $user->save();

                        return back()->with('successMsg', 'প্রোফাইল পাসওয়ার্ড সফলভাবে হালনাগাদ করা হয়েছে');

                    }else{
                        return back()->with('errorMsg', 'বর্তমান পাসওয়ার্ড এবং নতুন পাসওয়ার্ড একই');
                    }
                }
                else{
                    return back()->with('errorMsg', 'বর্তমান পাসওয়ার্ড মেলে না');
                }
            }



        }
    }

}
