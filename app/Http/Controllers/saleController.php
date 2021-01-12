<?php
use App\Models\sale;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sale;
use Illuminate\Support\Facades\DB;

class saleController extends Controller
{
    public function list(){

        $sale = DB::table('sales')
            ->join('products', 'products.id_product', '=', 'sales.id_product')
            ->join('locations', 'locations.id_location', '=', 'sales.id_location')
            ->select('sales.id_sale',
                     'products.id_product',
                     'locations.id_location', 
                     'locations.address', 
                     'products.name', 
                     'sales.quantity')
            ->get();

        return $sale;
    }

    public function store(Request $request)
    {
       $sale  = new sale();
       $sale->id_product  = $request->idProduct;
       $sale->id_location  = $request->idLocation;
       $sale->quantity  = $request->quantity;
       $sale->save();
    }

    public function update(Request $request)
    {
       $sale  = sale::findOrFail($request->id);
       $sale->id_product  = $request->idProduct;
       $sale->id_location  = $request->idLocation;
       $sale->quantity  = $request->quantity;
       $sale->save();
    }

    public function delete(Request $request){

    }
}
