<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_order;
use Carbon\Carbon;
class product_orderController extends Controller
{
  public function store_product_order (Request $request){
    try{ 
        $product_order = new product_order;
        $product_order->id=$request->id;
        $product_order->product_id=$request->product_id;
        $product_order->order_id=$request->order_id;
        $product_order->created_at=Carbon::now();
        $product_order->update_at=Carbon::now();
        $product_order->save();


        return response()->json([
            'message'=>'product_order succesfully',
            'product_order'=>$product_order,
            'status'=>200,
        ]);
    }catch (\Exception $e){
        return response()->json([
            'message'=>'Product_Order Not Created',
            'product_order'=>$product_order,
            'status'=>201,
            '4'=> $e,
        ]);
    }
  }
}
