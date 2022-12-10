<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
  public function ProdukView()
    {
    $data['allDataProduk']=Produk::all();
    return view("admin.produk.view", $data);
    }

  public function ProdukAdd()
  {
        return view('admin.produk.tambah');
  }


  public function ProdukStore(Request $request)
  {
        $request->validate([
        'nama' =>'required',
        'gambar' =>'required|mimes:jpg,png,jpeg|image|max:2048',
        ]);

        if($request->hasFile('file')){
          $path = $request->file('file')->store('uploads');
        }

        $data=new Produk();

        $data->nama=$request->name;
        $data->gambar=$path->file;
        $data->harga=$request->harga;
        $data->stok=$request->stok;
        $data->keterangan=$request->text;
        
        $data->save();

        return redirect()->route('produk.view');
  }


}



