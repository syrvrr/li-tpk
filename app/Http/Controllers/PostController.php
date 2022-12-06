<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\pengaduan;

class PostController extends Controller
{
    public function search(Request $request)
    {
        if($request->has('search')){
            $pengaduan = Pengaduan::where('kode','LIKE','%' . $request->search.'%');
        }else{
            $pengaduan = Pengaduan::paginate(5);
        }
        return view('cari')
    }
}
