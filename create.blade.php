@extends('template')

@section('main')
    <div id="bunga">
        <h2 align="center">Tambah Bunga</h2>

        <form action="{{ url('simpan') }}" method="post">
        {{ csrf_field () }}
        <div class="form-group"> 
 <label for="nisn" class="control-label">Kode Bunga</label>
            <input name="kd_bunga" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama_bunga" class="control-label">Nama Bunga</label>
            <input name="nama_bunga" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="stok" class="control-label">Stok</label>
            <input name="stok" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="harga" class="control-label">Harga</label>
            <input name="harga" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/lara/public/bunga'">Kembali</button>
        </form>
        </div>
    @stop