<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bunga;

class bungacontroller extends Controller
{ 
    public function bunga() {
        $halaman = 'Bunga';
        $bunga_list = Bunga::all();
        return view('bunga.index', compact('halaman', 'bunga_list'));
    }
    public function create() {
        $halaman = 'bunga';
        return view('bunga.create', compact('halaman'));
    }
    public function store(Request $request) {
        Bunga::create($request->all());
        return redirect('bunga');
    }
    public function show($id) {
        $halaman = 'Bunga';
        $bunga = Bunga::findOrFail($id);
        return view('bunga.show', compact('halaman','bunga'));
    }
    public function edit($id) {
        $halaman = 'bunga';
        $bunga = Bunga::findOrFail($id);
        return view('bunga.edit', compact('halaman','bunga'));
    }
    public function update($id, Request $request) {
        $halaman = 'bunga';
        $bunga = Bunga::findOrFail($id);
        $bunga->kd_bunga = $request->kd_bunga;
        $bunga->nama_bunga = $request->nama_bunga;
        $bunga->stok = $request->stok;
        $bunga->harga = $request->harga;
        $bunga->save();
        return redirect('bunga');
    }
    public function destroy($id) {
        $bunga = Bunga::findOrFail($id);
        $bunga->delete();
        return redirect ('bunga');
    }
}