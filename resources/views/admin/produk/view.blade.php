@extends('layout.navbar')
@section('content')
@section('title', 'Detail')

<br><br><br><br>
<div class="container pt-6">
  <div class="card p-4 shadow-lg p-3 mb-5 bg-body rounded">
    <table class="table table-bordered table-striped text-center">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Gambar</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($allDataProduk as $key => $Produk)
        <tr>
          <th scope="row">{{ $key+1 }}</th>
          <td>{{ $Produk->nama }}</td>
          <td><img src="{{ asset('assets/img/barang/'.$Produk->gambar) }}" width="60px"></td>
          <td>Rp. {{ number_format($Produk->harga) }},-</td>
          <td>{{ $Produk->stok }}</td>
          <td>
            <a href="#" class="btn btn-info"><i class="bi bi-pencil-square">Edit</i></a>
            <a href="#" id="delete" class="btn btn-danger"><i class="bi bi-trash-fill">Hapus</i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

