<?php

namespace App\Http\Controllers;

/* Import Model */
use App\Models\Departemen;
use Illuminate\Http\Request;
use DB;

class DepartemenController extends Controller
{
    /**
     * index
     * 
     * @return void
     */

    public function index()
    {
        // det posts
        $departemen = Departemen::get();
        $departemen = DB::table('departemens')->paginate(5);
        // $departemen = DB::table('departemen')->paginate(10);

        // render view with posts
        return view('departemen.index', compact('departemen'));
        // return view('departemen.index', ['departemen' => $departemen]);
    }
}
