<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = siswa::orderby('id', 'DESC')->get();

        return view('index' , [
            'siswa' => $siswa
        ]);

    }

    public function tambah()
    {
        return view('siswa/tambah');
    }

    public function store(Request $request)
    {
        $this -> validate($request,[
            'nama' => 'required',
            'kelas' => 'required',
            'umur' => 'required'
        ]);

        siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'umur' => $request->umur

        ]);

        return redirect('/index');
    }

    public function delet($id)
    {
        $siswa = siswa::find($id);
        $siswa -> delete();
        return redirect('/index');
    }

    public function edit($id)
    {
        $siswa = siswa::find($id);
        return view('siswa/edit', ['siswa' => $siswa]);
    }

    public function update( Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'kelas' => 'required',
            'umur' => 'required'
        ]);
        $id= $request->id;
        // dd($id);
        $siswa = siswa::find($id);
        $siswa -> nama = $request->nama;
        $siswa -> kelas = $request->kelas;
        $siswa -> umur = $request->umur;
        
        $siswa -> save();
        return redirect('/index');
    }

}
