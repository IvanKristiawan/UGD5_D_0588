<?php

namespace App\Http\Controllers;

/* Import Model */
use App\Models\Proyek;
use Illuminate\Http\Request;
use DB;

class ProyekController extends Controller
{
     /**
     * index
     * 
     * @return void
     */

    public function index()
    {
        // det posts
        $proyek = Proyek::get();
        $proyek = DB::table('proyeks')->paginate(5);
        // $departemen = DB::table('departemen')->paginate(10);

        // render view with posts
        return view('proyek.index', compact('proyek'));
        // return view('departemen.index', ['departemen' => $departemen]);
    }
}
