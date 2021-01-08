<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;

class categoryController extends Controller
{
    public function list(){
        return  category::all();
    }

    public function getCategory(integer $id){
        return  category::all()->where("id_category", $id);
    }

    public function store(Request $request)
    {
       $category  = new category();
       $category->name  = $request->name;
       $category->save();
    }

    public function update(Request $request)
    {
       $category  = category::findOrFail($request->id);
       $category->name  = $request->name;
       $category->save();
    }

    public function delete(Request $request){

    }
}
