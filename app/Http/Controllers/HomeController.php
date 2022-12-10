<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
  public function Home()
  {
    $Produk = Produk::all();
        return view('welcome', compact('Produk'));
  }   
}
