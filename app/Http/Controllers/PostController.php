<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function cari(Request $request)
    {
        if($request->has('cari')){
            $pengaduan = Pengaduan::where('kode','LIKE','%');

        }
    }
}
