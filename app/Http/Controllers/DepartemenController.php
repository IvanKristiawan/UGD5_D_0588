<?php

namespace App\Http\Controllers;

/* Import Model */

use Mail;
use App\Mail\DepartemenMail; /* import model mail */
use App\Models\Departemen; /* import model departemen */
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get departemen
        $departemen = Departemen::latest()->paginate(5);
        //render view with posts
        return view('departemen.index', compact('departemen'));
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('departemen.create');
    }
    // public function edit($id)
    // {
    //     $departemen = Departemen::where('id',$id)->get();
    //     // return view('departemen.edit');
    //     // return view('departemen.edit',['departemen' => $departemen]);
    //     return view('departemen.edit', compact('departemen'));
    // }
    public function edit($id)
    {
        $departemen = Departemen::find($id);
        return view('departemen.edit', compact('departemen'));  // -> resources/views/stocks/edit.blade.php
    }
    public function update(Request $request, $id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'nama_departemen' => 'required',
            'nama_manager' => 'required',
            'jumlah_pegawai' => 'required'
        ]);
        $stock = Departemen::find($id);
        // Getting values from the blade template form
        $stock->nama_departemen =  $request->get('nama_departemen');
        $stock->nama_manager = $request->get('nama_manager');
        $stock->jumlah_pegawai = $request->get('jumlah_pegawai');
        $stock->save();

        return redirect()->route('departemen.index')->with(['success'
        => 'Data Berhasil Diedit!']);
    }
    public function destroy($id)
    {
        $user = Departemen::where('id', $id)->firstorfail()->delete();
        echo ("User Record deleted successfully.");
        return redirect()->route('departemen.index')->with(['success'
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
            'nama_departemen' => 'required',
            'nama_manager' => 'required',
            'jumlah_pegawai' => 'required'
        ]);
        //Fungsi Simpan Data ke dalam Database
        Departemen::create([
            'nama_departemen' => $request->nama_departemen,
            'nama_manager' => $request->nama_manager,
            'jumlah_pegawai' => $request->jumlah_pegawai
        ]);
        try {
            //Mengisi variabel yang akan ditampilkan pada view mail
            $content = [
                'body' => $request->nama_departemen,
            ];
            //Mengirim email ke emailtujuan@gmail.com
            Mail::to('ivanteens@gmail.com')->send(new DepartemenMail($content));
            //Redirect jika berhasil mengirim email
            return redirect()->route('departemen.index')->with(['success'
            => 'Data Berhasil Disimpan, email telah terkirim!']);
        } catch (Exception $e) {
            //Redirect jika gagal mengirim email
            return redirect()->route('departemen.index')->with(['success'
            => 'Data Berhasil Disimpan, namun gagal mengirim email!']);
        }
    }
}
