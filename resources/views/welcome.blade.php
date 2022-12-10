@extends('layout.navbar')
@section('content')
@section('title', 'Dashboard')

<link rel="stylesheet" href="{{ asset('assets/utama.css') }}">

<center>
  <div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('assets/img/slayer1.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/img/slayer2.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/img/slayer3.png') }}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div><br><br>
</center>

<div class="container-fluid">
  <div class="row mt-8">
    @foreach ($Produk as $baju)  
        <div class="col">
          <a href="{{ url('Produk/Detail', $baju->id) }}">
            <div class="card mb-5" style="width: 18rem;">
              <img src="assets/img/barang/{{$baju->gambar}}" class="card-img-top" alt="...">
              <div class="card-body">
              </a>
                <h5 class="card-title">{{$baju->nama}}</h5>
                {{-- <p class="card-text">{{ $brg->deskripsi_detail }}</p> --}}
                <p class="card-text"><b>Harga :</b> Rp. {{ number_format($baju->harga) }},-</p>
                <p class="card-text"><b>Stok : </b>{{  $baju->stok}}</p>
              </div>
          </div>

        </div>
    @endforeach
</div>
  
</div>
@endsection