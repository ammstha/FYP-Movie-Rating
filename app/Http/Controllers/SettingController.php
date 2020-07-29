<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSetting;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        $settings = Setting::all();
        return view('setting.index', compact('settings'));
    }

    public function update(UpdateSetting  $request, Setting $setting)
    {
        $data = $request->data();
        $setting->update($data);
        return redirect()->route('setting.index');
    }


}
