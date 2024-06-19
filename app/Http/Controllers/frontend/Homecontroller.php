<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\frontend\Registercontroller;
use App\Models\Cart;
use App\Models\Feedback;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\DB;

class Homecontroller extends Controller
{
    public function index()
    {
        $allProducts=Product::all();
        $fruits=Product::where('category','fruits')->get();
        $vegetables=Product::where('category','vegetables')->get();
        $snacks=Product::where('category','snacks')->get();
        $nonveg=Product::where('category','nonveg')->get();

        return view('frontend.home',compact('allProducts','fruits','vegetables','snacks','nonveg'));
    }

    public function view()
    {
        $product=Product::all();

        return view('frontend.view_page')->with('product',$product);
    }

    public function cart()
    {
        $cartItems=DB::table('products')
        ->join('carts','carts.productId','products.id')
        ->select('products.name','products.image','products.price','carts.*')
        ->where('carts.userId',session()->get('id'))
        ->get();



        return view('frontend.cart',compact('cartItems'));
    }

    public function cartitem(Request $data)
    {
       if(session()->has('id'))
       {
        $item=new Cart();
        $item->quantity=$data->input('quantity');
        $item->productId=$data->input('id');
        $item->userId=session()->get('id');
        $item->save();

        return redirect()->back()->with('success','Item is added');
       }
       else
       {
            return redirect('login');

       }

        return view('frontend.cart');
    }

    public function deletecartitem($id)
    {
        $item=Cart::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function updatecart(Request $data)
    {
        if(session()->has('id'))
        {
         $item=Cart::find($data->input('id'));
         $item->quantity=$data->input('quantity');
         $item->save();

         return redirect()->back();
        }
        else
        {
             return redirect('login');

        }
        return view('frontend.cart');
    }

    public function checkoutItem(Request $data)
    {
        if(session()->has('id'))
        {
            $order = new Order();
            $order->userId=session()->get('id');
            $order->name=$data->input('name');
            $order->number=$data->input('number');
            $order->email=$data->input('email');
            $order->method=$data->input('method');
            $order->address=$data->input('address');
            $order->city=$data->input('city');
            $order->state=$data->input('state');
            $order->country=$data->input('country');
            $order->pincode=$data->input('pincode');

            if($order->save())
            {
                $carts=Cart::where('userId',session()->get('id'))->get();
                foreach($carts as $item)
                {
                    $product=Product::find($item->productId);
                    $orderitem=new OrderItem();
                    $orderitem->productId=$item->productId;
                    $orderitem->quantity=$item->quantity;
                    $orderitem->price=$product->price;
                    $orderitem->orderId=$item->id;
                    $orderitem->save();
                    $item->delete();
                }
            }
            return redirect('order');
        }
        else
        {
            return redirect('login');

        }
        return view('frontend.checkout',compact('order'));
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function ord()
    {
        if(session()->has('id'))
        {
            $ord=Order::where('userId',session()->get('id'))->get();
            return view('frontend.orders',compact('ord'));
        }
    }

    public function contect()
    {

        return view('frontend.contact');
    }

    public function feedbackuser(Request $data)
    {
        $feedback = new Feedback();
        $feedback->name=$data->input('name');
        $feedback->email=$data->input('email');
        $feedback->number=$data->input('number');
        $feedback->message=$data->input('msg');

        $feedback->save();
        return redirect()->back();
    }

    public function adminfeedback()
    {
        $feedback=Feedback::all();
        return view('frontend.admin_contacts',compact('feedback'));
    }

    public function feedbackdel($id)
    {
        $item=Feedback::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function wishlist()
    {
        $wishlistItems=DB::table('products')
        ->join('wishlists','wishlists.productId','products.id')
        ->select('products.name','products.image','products.price','wishlists.*')
        ->where('wishlists.userId',session()->get('id'))
        ->get();


        return view('frontend.wishlist',compact('wishlistItems'));
    }

    public function wishlistitem(Request $data)
    {
       if(session()->has('id'))
       {
        $item=new Wishlist();
        $item->quantity=$data->input('quantity');
        $item->productId=$data->input('id');
        $item->userId=session()->get('id');
        $item->save();

        return redirect()->back()->with('success','Item is added');
       }
       else
       {
            return redirect('login');

       }

        return view('frontend.wishlist');
    }

    public function deleteallcartitem()
    {
        $item=Cart::all();
        $item->delete()->all();
        return redirect()->back();
    }
}
