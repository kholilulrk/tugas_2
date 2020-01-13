<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Store extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function save(Request $request)      
    {
        $nama = $request->input('nama');
        $tempat = $request->input('tempat');
        $tanggal = $request->input('tanggal');
        $jk = $request->input('jk');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $data['data']=([
            'nama'=>$nama,
            'tempat'=>$tempat,
            'tanggal'=>$tanggal,
            'jk'=>$jk,
            'email'=>$email,
            'alamat'=>$alamat
        ]);
        return view('pages.output', $data);
    }
}
