<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Rating;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserSettingController extends Controller
{
    public function accountSetting(User $user)
    {
        return view('userSetting.accountSetting',compact('user'));
    }

    public function updateName(Request $request,User $user){
        $data=[
            'name'=>$request->get('name'),
            'slug' => str_slug($request->get('name')),
        ];
        $user->update($data);
        return redirect()->route('accountSetting',$user->slug);
    }
    public function updateEmail(Request $request,User $user){
        $data=[
            'email'=>$request->get('email'),
        ];
        $user->update($data);
        return redirect()->route('accountSetting',$user->slug);
    }
    public function updatePassword(Request $request, User $user)
    {
        $currentPassword = $request->get('current_password');

        if (Hash::check($currentPassword, $user->password)) {

            $userPassword = [
                'password' => bcrypt($request->get('password'))
            ];
            $user->update($userPassword);
            return redirect()->route('accountSetting', $user->slug);
        }

        return redirect()->back()->withWarning('Invalid current password');
    }

    public function userProfileUpdate(Request $request, User $user)
    {

        $file = $request->file('image');
        $filenameWithExt = $file->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileNameToStore= $filename.'_'.time().'.'.$extension;

        $data      = [
            'image' =>  $filename,
            'path'   => $file->storeAs('user',$fileNameToStore, 'public'),
            'meta' =>'Profile',
        ];
        if ($request->hasFile('$data')) {
            $user->images->image = $fileNameToStore;
        }
        if($user->images()->first())
            $user->images()->first()->update($data);
        else
            $user->images()->create($data);

        return redirect()->route('accountSetting', $user->slug);

    }

    public function yourActivity(Request $user)
    {
        $userRatings=auth()->user()->ratings()->with('movie')->take(4)->latest()->get();

        $recentlySearched=auth()->user()->searches()->with('movie')->take(2)->latest()->get();

        return view('userSetting.yourActivity',compact('userRatings','recentlySearched'));
    }
}

