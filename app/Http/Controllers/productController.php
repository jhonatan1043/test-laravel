<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\product;

class productController extends Controller
{
    public function list(){
        return  product::all();
    }

    public function getProduct(integer $id){
        return  product::all()->where("id_product", $id);
    }

    public function store(Request $request)
    {
       $product  = new product();
       $product->name  = $request->name;
       $product->purchase_price  = $request->purchase_price;
       $product->spending  = $request->spending;
       $product->price_finished  = $request->price_finished;
       $product->save();
    }

    public function update(Request $request)
    {
       $product  = product::findOrFail($request->id);
       $product->name  = $request->name;
       $product->purchase_price  = $request->purchase_price;
       $product->spending  = $request->spending;
       $product->price_finished  = $request->price_finished;
       $product->save();
    }

    public function delete(Request $request){

    }
}
