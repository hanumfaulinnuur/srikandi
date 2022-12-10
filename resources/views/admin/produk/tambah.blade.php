@extends('layout.navbar')
@section('content')
@section('title', 'Tambah')
<br><br><br><br>

<div class="container pt-2">
  <div class="card p-4 shadow-lg p-3 mb-5 bg-body rounded">
    <section class="content">
      <form method="POST" action="{{ url('Produk/proses-tambah') }}" enctype="multipart/form-data">
        @csrf
            <div class="container m-6">
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
              <input type="name" name="name" id="name" class="form-control">
            </div>
          </div>
      
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Gambar Produk</label>
            <div class="col-sm-10">
              <input class="form-control" name="file" type="file" id="file" accept="image/*">
            </div>
          </div>
      
          <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Harga Produk</label>
            <div class="col-sm-10">
              <input type="number" name="harga" id="harga" class="form-control">
            </div>
          </div>
      
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Stok Produk</label>
            <div class="col-sm-10">
              <input type="number" name="Stok" id="stok" class="form-control">
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Detail Keterangan</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="text" id="text" style="height: 100px"></textarea>
            </div>
          </div>
      
          <div class="text-xs-right">
            <button type="submit" class="btn btn-warning btn-info">Submit</button>
          </div>
          </div>
      </form>
    </section>
  </div>
</div>


@endsection