<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Siswa extends Controller
{
    public function siswa(){
        $a = [
            array('id' => 1, 'nama' => 'Dadang', 'age' => 15),
            array('id' => 2, 'nama' => 'Dudung', 'age' => 18)
        ];

        
        return view('pages.siswa', ['siswa' => $a]);
    }

    // BERAT BADAN
    public function BB($berat_badan, $tinggi_badan)
    {
        $BMI = $berat_badan / ($tinggi_badan/100 * $tinggi_badan/100);

        if ($BMI <= 17.0 ){
           $status = "Kurus, kekurangan berat badan berat";            
        }

        else if ($BMI >= 17.0 && $BMI <= 18.4){
              $status =  'Kurus, kekurangan berat badan ringan';
        }

        elseif ($BMI >= 18.5 && $BMI <= 25.0 ){
            $status = 'Normal';
        }

        elseif ($BMI >= 25.1 && $BMI <= 27.0 ){
            $status = 'Gemul, kelebihan Berat badan tingkat ringan';
        }

        elseif ($BMI >= 27.1 ){
            $status = 'Gemul, kelebihan Berat badan tingkat Berat';
        }else{
            $status = "Tidak ada";
        }
        return view('pages.BB', compact('BMI','status','berat_badan','tinggi_badan'));
    }
}
