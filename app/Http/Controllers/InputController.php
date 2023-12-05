<?php
// InputController menerima inputtan dari volume_keliling_balok

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function hitung(Request $request){
        // Panjang
        $panjang = $request->input('panjang');
        // Lebar
        $lebar = $request->input('lebar');
        // Tinggi
        $tinggi = $request->input('tinggi');
        // Hitung volume balok
        $volume = $panjang*$lebar*$tinggi;
        // Hitung keliling balok
        $keliling = 4*($panjang+$lebar+$tinggi);

        $request->session()->flash('valid', 'Volume dan Keliling');

        return view('volume_keliling_balok',[
            'title'=>'Volume dan Keliling Balok',
            'panjang'=>$panjang,
            'lebar'=>$lebar,
            'tinggi'=>$tinggi,
            'volume'=>$volume,
            'keliling'=>$keliling
        ]);
    }
}
