<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
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
   public function orderNow()
   {
      $userID=Session::get('user')['id'];
    $total=DB::table('cart')
      ->join('products','cart.product_id','products.id')    
      ->where('cart.user_id',$userID)
      ->sum('products.price');
     return view('Ordernow',['total'=>$total]);
   }

   public function orderPlace(Request $request)
   {
      $userID=Session::get('user')['id'];
      
      $allCart=Cart::where('user_id',$userID)->get();

      foreach ($allCart as $cart) {
         

         $order= new Order;
         $order->product_id=$cart['product_id'];
         $order->user_id=$cart['user_id'];
         $order->address=$request->address;
         $order->status="pending";
         $order->payment_method=$request->payment;
         $order->payment_status="pending";

         $order->save();
      }
      Cart::where('user_id',$userID)->delete();
      return back();

   }

   public function myOrder()
   {
      
      $userID=Session::get('user')['id'];
      $orders=DB::table('orders_tables')
        ->join('products','orders_tables.product_id','products.id')    
        ->where('orders_tables.user_id',$userID)
        ->get();
       return view('Myorder',['orders'=>$orders]);

   }
}
