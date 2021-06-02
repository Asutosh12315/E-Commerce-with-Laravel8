<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

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

   public function search(Request $request)
   {

      $data=Product::where('name','like','%'.$request->input('query').'%')
     ->get();

     return view('Search',['data'=>$data]);


   }
   public function addToCart(Request $request)
   {
      if ($request->session()->has('user')) {
        
       
         $cart= new Cart;         
         $cart->user_id=$request->session()->get('user')['id'];
         $cart->product_id=$request->product_id;
         $cart->save();

         return back();

      }else {
         
         return redirect('/login');
      }
   }

   public static function cartItem()
   {
      
      $userID=Session::get('user')['id'];

      return Cart::where('user_id',$userID)->count();


      
   }
}
