<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use DB;

class HomeController extends Controller
{
    public function index(Berita $berita){

        $data = array(
            'title' => 'Home',
            'beritas' => $berita->orderBy('id','desc')->paginate(10),
            'kategori' => 'keseluruhan'

        );
        return view('content/home',$data);
    }
    public function get_by_id(Berita $berita, $id){
        $berita = $berita->where('kategori_id',$id)->paginate(10);
        $kategori = DB::table('kategori')->where('kategori_id',$id)->first();
        $data = array(
            'title' => 'Home',
            'beritas' => $berita,
            'kategori' => 'Bagian '.$kategori->kategori_nama
        );
        return view('content/home',$data);
    }
}
