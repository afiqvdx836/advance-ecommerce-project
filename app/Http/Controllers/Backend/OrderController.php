<?php

namespace App\Http\Controllers\Backend;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function PendingOrders(){
        $orders = Order::where('status', 'Pending')->orderBy('id','DESC')->get();
        return view ('backend.orders.pending_orders', compact('orders'));
    }

    public function PendingOrderDetail($order_id){
        $order = Order::with('division', 'district','state','user')->where('id',$order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->get();
        return view ('backend.orders.pending_order_details', compact('order','orderItem'));
    }

    
    //comfirm orders
    public function ConfirmedOrders(){
        $orders = Order::where('status', 'confirmed')->orderBy('id','DESC')->get();
        return view ('backend.orders.confirmed_orders', compact('orders'));
    }


    //processnig orders
    public function ProcessingOrders(){
        $orders = Order::where('status', 'processing')->orderBy('id','DESC')->get();
        return view ('backend.orders.processing_orders', compact('orders'));
    }


    //picked orders
    public function PickedOrders(){
        $orders = Order::where('status', 'picked')->orderBy('id','DESC')->get();
        return view ('backend.orders.picked_orders', compact('orders'));
    }


    //Shipped orders
    public function ShippedOrders(){
        $orders = Order::where('status', 'confirmed')->orderBy('id','DESC')->get();
        return view ('backend.orders.shiped_orders', compact('orders'));
    }


    //comfirm orders
    public function DeliveredOrders(){
        $orders = Order::where('status', 'delivered')->orderBy('id','DESC')->get();
        return view ('backend.orders.delivered_orders', compact('orders'));
    }

    //canceled orders
    public function CancelOrders(){
        $orders = Order::where('status', 'cancel')->orderBy('id','DESC')->get();
        return view ('backend.orders.cancel_orders', compact('orders'));
    }
}
