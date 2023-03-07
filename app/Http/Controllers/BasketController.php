<?php

namespace App\Http\Controllers;

use App\Models\basket;
use App\Models\product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = product::find($id);
        if ($product->count < 1) {
            return back();
        }

        if ($basket = basket::where('product_id', $id)->where('user_id', auth()->user()->id)->first()) {
            $basket->count++;
            $basket->save();
            $product->count--;
            $product->save();
        } else {
            basket::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'count' => 1,
            ]);
            $product->count--;
            $product->save();
        }
        // dd($basket);
      
        return redirect()->route('catalog');
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
     * @param  \App\Models\basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(basket $basket)
    {
        //
    }
}
