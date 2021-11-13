<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function APIList(){
        return Product::all();
    }
    
    

    public function APICreate(Request $request)
    {
        
        $var = new product();
        $var->p_name= $request->name;
        $var->p_code = $request->pcode;
        $var->p_desc = $request->pdes;
        $var->p_category = $request->category;
        $var->p_price=$request->price;
        $var->p_quantity = $request->quantity;
        $var->p_stock_date = $request->stockDate;
        $var->p_rating = $request->rating;
        $var->p_purchased=$request->purchased;

        $var->save();
        return $request;
    }

}
