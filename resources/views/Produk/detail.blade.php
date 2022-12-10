@extends('layout.navbar')
@section('content')
@section('title', 'Detail')
<link rel="stylesheet" href="{{ asset('assets/detail.css') }}">


    <div class="container atas">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-1">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card" style="width: 20rem;">
                                        <img src="{{ asset('assets/img/barang/'.$Produk->gambar) }}" class="card-img-top" alt="...">
                                      </div>
                                </div>
                                <div class="col-md-6 mt-5">
                                    <h2>{{ $Produk->nama }}</h2>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Harga</td>
                                                <td>:</td>
                                                <td>Rp. {{ number_format($Produk->harga) }},-</td>
                                            </tr>
                                            <tr>
                                                <td>Stok</td>
                                                <td>:</td>
                                                <td>{{ number_format($Produk->stok) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Keterangan</td>
                                                <td>:</td>
                                                <td>{{ $Produk->keterangan }}</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Jumlah Beli</td>
                                                <td>:</td>
                                                <td>
                                                     <form method="post" action="{{ url('pesan') }}/{{ $Produk->id }}" >
                                                    @csrf
                                                        <input type="text" name="jumlah_pesan" class="form-control" required="">
                                                        <button type="submit" class="btn btn-success mt-2"></i>+ Keranjang</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection





