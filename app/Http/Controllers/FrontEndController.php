<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Produk;
class FrontEndController extends Controller
{
    public function produks()
    {
    	return view('frontends.index');
    }

    public function all ()
    {
    	$produks = Produk::orderBy('created_at','DESC')->paginate(4);
    	return view('frontends.shop', compact('produks'));
    }
    public function show ()
    {
    	$data = Produk::where('slug', $slug)->first();
    	return view('frontends.product', compact('data'));
    }
}
