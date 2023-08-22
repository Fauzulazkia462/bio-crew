<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function insert(Request $req){

        \DB::table('employees')
        ->insert([
            'fullname' => $req -> fName,
            'email' => $req -> email,
            'address' => $req -> alamat,
            'rt' => $req -> rt,
            'rw' => $req -> rw,
            'kelurahan' => $req -> lurah,
            'kecamatan' => $req -> camat,
            'kabupaten' => $req -> kabupaten,
            'phone' => $req -> phone,
            'kontak_keluarga' => $req -> noKeluarga,
            'hubungan_keluarga' => $req -> hubungan,
            'ktp' => $req -> noKtp,
            'kk' => $req -> noKk,
            'npwp' => $req -> npwp,
            'place' => $req -> pob,
            'dob' => $req -> dob,
            'gender' => $req -> gender,
            'martial' => $req -> martial,
            'religion' => $req -> religion,
            'noBpjs' => $req -> bpjs,
            'noBpjsTk' => $req -> bpjsTk,
        ]);

        return redirect()->to('/')->with('message', [
            'type' => 'success',
            'msg' => 'Berhasil!',
        ]);
    }
}
