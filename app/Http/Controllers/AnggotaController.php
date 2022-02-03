<?php

namespace App\Http\Controllers;
use App\Anggota;
use Illuminate\Http\Request;

class anggotaController extends Controller{
    public function index(){
    $anggota = Anggota::latest()->paginate(30);
        return view('anggota.index',compact('anggota'));
    }

    public function create(){
        return view('anggota.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'agama' => 'required',
            'no_hp' => 'required|numeric',
            'alamat' => 'required',
        ]);
        $model = Anggota::all();
        if (count($model) >= 30) {
                return redirect()->route('anggota.index')
                                 ->with('error', 'Anggota Sudah Menuju Tak Terbatas Dan Melampauinya!');
        }
        Anggota::create($request->all());
        return redirect()->route('anggota.index')
                         ->with('success','anggota created successfully.');
    }

    public function show(Anggota $anggota){
        return view('anggota.show',compact('anggota'));
    }

    public function edit($id){
        $anggota = Anggota::findorFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'agama' => 'required',
            'no_hp' => 'required|numeric',
            'alamat' => 'required',
        ]);
        $anggota = Anggota::findorFail($id);
        $anggota->update($request->all());
        return redirect()->route('anggota.index')
                         ->with('success','anggota updated successfully');
    }

    public function destroy($id){
        $anggota = Anggota::findorFail($id);
        $anggota->delete();
        return redirect()->route('anggota.index')
                         ->with('success','anggota deleted successfully');
    }
}