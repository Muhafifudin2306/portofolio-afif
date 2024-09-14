<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $header_logo = Setting::where('setting_name', 'header_logo')->first()->content ?? null;
        $front_title = Setting::where('setting_name', 'front_title')->first()->content ?? null;
        $hero_desc = Setting::where('setting_name', 'hero_desc')->first()->content ?? null;
        $hero_image = Setting::where('setting_name', 'hero_image')->first()->content ?? null;
        $my_cv = Setting::where('setting_name', 'my_cv')->first()->content ?? null;
        $about_me = Setting::where('setting_name', 'about_me')->first()->content ?? null;
        $experience_1 = Setting::where('setting_name', 'experience_1')->first() ?? null;
        return view('welcome', compact(
            'header_logo',
            'front_title',
            'hero_desc',
            'hero_image',
            'my_cv',
            'about_me',
            'experience_1'
        ));
    }
}
