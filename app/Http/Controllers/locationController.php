<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\location;

class locationController extends Controller
{
    public function list(){
        return  location::all();
    }

    public function getLocation(integer $id){
        return  location::all()->where("id_location", $id);
    }

    public function store(Request $request)
    {
       $location  = new location();
       $location->address  = $request->address;
       $location->name_responsible  = $request->name_responsible;
       $location->save();
    }

    public function update(Request $request)
    {
       $location  = location::findOrFail($request->id);
       $location->address  = $request->address;
       $location->name_responsible  = $request->name_responsible;
       $location->save();
    }

    public function delete(Request $request){

    }
}
