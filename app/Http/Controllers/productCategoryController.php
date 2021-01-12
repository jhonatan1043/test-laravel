<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productCategory;
use Illuminate\Support\Facades\DB;

class productCategoryController extends Controller
{
  public function store(Request $request){
    try {
        DB::beginTransaction();

            $productCategory =  productCategory::findOrFail($request->idProduct);
            $productCategory->delete();

            $productCategory  = new productCategory();
            $productCategory->id_product  = $request->idProduct;
            $productCategory->id_category  = $request->idCategory;
            $productCategory->save();
        DB::commit();
        } catch (ModelNotFoundException $e) {
            DB::rollBack();
        }
  }

  public function getProductCategory(Request $request){
    return  productCategory::all()->where("id_product", $request->idProduct);
  }
}
