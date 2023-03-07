<?php

namespace App\Http\Controllers;

use App\Models\catalog;
use App\Models\product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function name()
    {
        $products = product::orderBy('name', 'ASC')->get();
        $categories = \App\Models\category::all();
        return view('catalog', compact('products', 'categories'));
    }
    public function year()
    {
        $products = product::orderBy('year', 'DESC')->get();
        $categories = \App\Models\category::all();
        return view('catalog', compact('products', 'categories'));
    }
    public function price()
    {
        $products = product::orderBy('price', 'DESC')->get();
        $categories = \App\Models\category::all();
        return view('catalog', compact('products', 'categories'));
    }
}
