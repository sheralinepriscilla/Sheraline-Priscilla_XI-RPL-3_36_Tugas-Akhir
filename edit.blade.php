@extends('template')

@section('main')
    <div id="siswa">
        <h2>Edit Data Bunga</h2>

        <form action="{{ url('bunga/' . $bunga->id. '/update') }}" method="post">
        {{ csrf_field () }} 
            <div class="form-group">
                <label for="kd_bunga" class="control-label">Kode Bunga</label>
                <input name="kd_bunga" type="text" class="form-control" value="{{ $bunga->kd_bunga }}">
            </div>

            <div class="form-group">
                <label for="nama_bunga" class="control-label">Nama Bunga</label>
                <input name="nama_bunga" type="text" class="form-control" value="{{ $bunga->nama_bunga }}">
            </div>

            <div class="form-group">
                <label for="stok" class="control-label">Stok</label>
                <input name="stok" type="text" class="form-control" value="{{ $bunga->stok }}">
            </div>

            <div class="form-group">
                <label for="harga" class="control-label">Harga</label>
                <input name="harga" type="text" class="form-control" value="{{ $bunga->harga }}">
            </div>
           
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/lara/public/bunga'">Kembali</button>
    </form>
</div>
@stop
        