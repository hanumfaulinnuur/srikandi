<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class DetailController extends Controller
{

  public function Detail($id)
  {
    $Produk = Produk::find($id);
    return view("Produk/Detail", compact('Produk'));
  } 
}

