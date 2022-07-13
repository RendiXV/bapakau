<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function hallo()
    {
        $f = 10;
        $total = $f * 100;
        if ($total > 1000){
            return 'Diatas seribu';
        }else{
            return 'Dibawah seribu';
        }
        return $total;
    }

    public function profile()
    {
        return view('profile');
    }

    public function facebook($perkalian, $nama )
    {
        $calkulator = 1+5;
        $hasilperkalian = $calkulator * $perkalian;
        $jk = 10; 
        return view('about', compact('nama', 'hasilperkalian', 'jk'));
    }
    
}
