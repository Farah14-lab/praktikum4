<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
        //mengambil data pegawai
        $pegawai = pegawai::all();

        //mengirim data pegawai ke view pegawai
        return view('pegawai', ['pegawai' => $pegawai]);
    }
}
