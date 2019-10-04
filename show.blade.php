@extends('template')

@section('main')
<div id="siswa">
    <h2 align="center">Detail Bunga</h2>
<table class="table table-striped">
  <tr>
      <th>Kode Bunga</th>
      <td>{{ $bunga->kd_bunga }}</td>
    </tr>
    <tr>
      <th>Nama Bunga</th>
      <td>{{ $bunga->nama_bunga }}</td>
    </tr>
    <tr>
      <th>Stok</th>
      <td>{{ $bunga->stok }}</td>
    </tr>
    <tr>
      <th>Harga</th>
      <td>{{ $bunga->harga }}</td>
    </tr>
</table>
<button type="button" class="btn btn-primary" onclick="window.location='http://localhost/lara/public/bunga'">Kembali</button>
</div>
@stop