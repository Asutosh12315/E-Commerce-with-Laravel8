<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   public function index()
   {
     
   $data=Product::all();
    return view('Product',['products'=>$data]);
   

   }
   public function details($id)
   {
     
    
    $data=Product::find($id);

    return view('Details',['product'=>$data]);



   }
}
