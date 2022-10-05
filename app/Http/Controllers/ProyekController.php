<?php

// namespace App\Http\Controllers;

// /* Import Model */
// use App\Models\Proyek;
// use App\Models\Departemen;
// use Illuminate\Http\Request;
// use DB;

// class ProyekController extends Controller
// {
//      /**
//      * index
//      * 
//      * @return void
//      */

//     public function index()
//     {
        // // det posts
        // $proyek = Proyek::get();
        // $departemen = Departemen::get();
        // $proyek = DB::table('proyeks')->paginate(5);
        // // $departemen = DB::table('departemen')->paginate(10);

        // // render view with posts
        // return view('proyek.index', compact(['proyek', 'departemen']));
        // // return view('departemen.index', ['departemen' => $departemen]);
//     }
// }

namespace App\Http\Controllers;

/* Import Model */

use App\Models\Departemen; /* import model departemen */
use Illuminate\Http\Request;
use App\Models\Proyek;
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
                $departemen = Departemen::get();
                $proyek = DB::table('proyeks')->paginate(5);
                // $departemen = DB::table('departemen')->paginate(10);
        
                // render view with posts
                return view('proyek.index', compact(['proyek', 'departemen']));
                // return view('departemen.index', ['departemen' => $departemen]);
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('proyek.create');
    }
    
    public function edit($id)
    {
        $proyek = Proyek::find($id);
        return view('proyek.edit', compact('proyek'));  // -> resources/views/stocks/edit.blade.php
    }
    public function update(Request $request, $id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'nama_proyek' => 'required',
            'departemen_id' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'status' => 'required'
        ]);
        $stock = Proyek::find($id);
        // Getting values from the blade template form
        $stock->nama_proyek =  $request->get('nama_proyek');
        $stock->departemen_id = $request->get('departemen_id');
        $stock->waktu_mulai = $request->get('waktu_mulai');
        $stock->waktu_selesai = $request->get('waktu_selesai');
        $stock->status = $request->get('status');
        $stock->save();

        return redirect()->route('proyek.index')->with(['success'
        => 'Data Berhasil Diedit!']);
    }
    public function destroy($id)
    {
        $user = Proyek::where('id', $id)->firstorfail()->delete();
        echo ("User Record deleted successfully.");
        return redirect()->route('proyek.index')->with(['success'
        => 'Data Berhasil Dihapus!']);
    }
    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //Validasi Formulir
        $this->validate($request, [
            'nama_proyek' => 'required',
            'departemen_id' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'status' => 'required'
        ]);
        //Fungsi Simpan Data ke dalam Database
        Proyek::create([
            'nama_proyek' => $request->nama_proyek,
            'departemen_id' => $request->departemen_id,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'status' => $request->status,
        ]);
        return redirect()->route('proyek.index')->with(['success'
        => 'Data Berhasil Disimpan!']);
    }
}