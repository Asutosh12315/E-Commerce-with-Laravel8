<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use\Illuminate\Support\Facades\DB;
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
   public function cartList()
   {
      
      $userID=Session::get('user')['id'];
      $data=DB::table('cart')
      ->join('products','cart.product_id','products.id')
      ->select('products.*','cart.id as cart_id')
      ->where('cart.user_id',$userID)
      ->get();
      return view('Cartlist',['data'=>$data]);

   }

   public function removeCart($id)
   {
      
      Cart::destroy($id);

      return back();


   }
}
