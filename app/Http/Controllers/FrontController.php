<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $header_logo = Setting::where('setting_name', 'header_logo')->first()->content ?? null;
        $front_title = Setting::where('setting_name', 'front_title')->first()->content ?? null;
        return view('welcome', compact(
            'header_logo',
            'front_title'
        ));
    }
}
