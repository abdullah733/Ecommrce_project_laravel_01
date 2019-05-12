<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class ProductController extends Controller
{
   public  function addproductview()
   {
        $products= product::simplePaginate(5);
       return view('product/view',compact('products'));

   }
   public  function Addproductinsert(Request $request)
   {
       product::insert([
           'product_name'=>$request->product_name,
           'product_description'=>$request->product_description,
           'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity,
            'alert_quantity'=>$request->alert_quantity,

       ]);
          return back()->with('status','Product Inserted Successfully');

   }
}
