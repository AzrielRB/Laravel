<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Customer;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function about()
    {
        return view('toko/about');
    }
    
    public function admin()
    {
        $products = Produk::all(); 
        return view('toko/admin', compact('products'));
    }

    public function customer ()
    {
        $customer = Customer::all();
        return view('toko/admin', compact('customer'));
    }
}
