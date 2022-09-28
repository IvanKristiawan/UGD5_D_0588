<?php

namespace App\Http\Controllers;

/* Import Model */
use App\Models\Pegawai;
use App\Models\Departemen;
use Illuminate\Http\Request;
use DB;

class PegawaiController extends Controller
{
     /**
     * index
     * 
     * @return void
     */

    public function index()
    {
        // det posts
        $pegawai = Pegawai::get();
        $departemen = Departemen::get();
        $pegawai = DB::table('pegawais')->paginate(5);
        // $departemen = DB::table('departemen')->paginate(10);

        // render view with posts
        return view('pegawai.index', compact(['pegawai', 'departemen']));
        // return view('departemen.index', ['departemen' => $departemen]);
    }
}
