<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Faker\Extension\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\HelperInterface;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, product $product)
    {
        //   dd($request->cat_id);

        if ($request->cat_id == 0) {
            $products = \App\Models\product::all();
        } else {
            $products = \App\Models\product::where('category', $request->cat_id)->get(); //категории товаров
            // dd($products->tosql()); 
        }
        $categories = \App\Models\category::all();
        return view('catalog', ['products2' => $products, 'categories2' => $categories]);
    }

    public function more($id)
    {
        $products = \App\Models\product::find($id);
        return view('card', ['products2' => $products]); //вывод информации о конкретном товаре
    }

    public function carousel(product $product)
    {
        $products = \App\Models\product::SELECT('id', 'name', 'img')->ORDERBY('id', 'DESC')->LIMIT(5)->get(); //вывод с BD пяти последних добавленных товаров, передаються только id,name,img
        return view('welcome', ['products2' => $products]);
        // dd($products);
    }


    
    public function card (product $product)
    {
        $products = \App\Models\product::SELECT('id','name','img')->ORDERBY('id', 'DESC')->LIMIT(5)->get();
        return view('home', ['products2' => $products]);
        // dd($products);
    }






    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //find  destroy
    }
}
