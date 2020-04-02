<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function randomText()
    {
        $array = ['ky1','ky2','ky3','ky4','ky5','ky6','ky7','ky8','ky9'];
        $text = $array[array_rand($array)];
        return \view('random',compact('text'));
    }
}
