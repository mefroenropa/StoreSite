<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\ProfileRequest;
use App\Http\Services\ImageUpload;
use App\User;
use System\Auth\Auth;

class ProfileController
{

    public function __construct()
    {
        if (Auth::user()->user_type == "admin") {
            return redirect('admin');
        }
    }

    public function index()
    {


        return view('auth.profile.index');
    }

    public function edit()
    {

        return view('auth.profile.edit');
    }

    public function update($id)
    {
        $request = new ProfileRequest;
        $inputs = $request->all();
        $inputs['id'] = Auth::user()->id;
        $file = $request->file('avatar');
        if (!empty($file['tmp_name'])) {
            $path = 'images/avatar/' . date('Y/M/d');
            $name = date('Y_m_d_H_i_s_') . rand(10, 99);
            $inputs['avatar'] = ImageUpload::UploadAndFitImage($request->file('avatar'), $path, $name, 640, 640);
        }
        $users = User::all();
        foreach($users as $user){

            if($user->email == $inputs['email']){
                unset($inputs['email']);
            }else{
                continue;
            }
            
        }
        User::update($inputs);
        return redirect('/profile');
    }

    public function boughtShow()
    {
        $boughts = Auth::user()->boughts()->get();

        return view('auth.profile.bought-list', compact('boughts'));
    }
}
