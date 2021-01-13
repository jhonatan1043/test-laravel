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

          productCategory::where('id_product', '=', $request->idProduct)->delete();

          foreach($request->arrayCategories as $category){

            print_r($category);

            if($category['status'] == 1){
            
                  $productCategory  = new productCategory();
                  $productCategory->id_product  = $request->idProduct;
                  $productCategory->id_category = $category['id_category'];
                  $productCategory->save();
                 }
           };

        DB::commit();

        } catch (ModelNotFoundException $e) {
            DB::rollBack();
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
  }

  public function getProductCategory(Request $request){

    return DB::select("SELECT categories.id_category, categories.name, product_category.id_category as status
                       FROM categories  
                        LEFT JOIN product_category ON product_category.id_category = categories.id_category
                         AND product_category.id_product = ?;",[$request->idProduct]);
  }
}
