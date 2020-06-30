<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use App\Cart;
use Auth;
use Illuminate\Http\Request;
use App\Mail\confirm;
use Illuminate\Support\Facades;

use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function getIndex()
    {
        return view('shop.index');
    }
    public function getShop($id = 1)
    {
        $products = Product::all()->where('cato', '=', $id);
        return view('shop.shop', ['products' => $products]);
    }
    public function getProduct($id = 1)
    {
        $products = Product::all()->where('id', '=', $id);
        return view('shop.product', ['products' => $products]);
    }
    public function getAddToCart(Request $request, $id) 
    {
        $product = Product::find($id);
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.shop');
    }
    public function getReduceByOne($id) 
    {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else{
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }
    public function getincreaseByOne($id)
     {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($id);

        if(count($cart->items) > 0)
        {
            Session::put('cart', $cart);
        } else
        {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }
    public function getRemoveItem($id)
    {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0)
        {
            Session::put('cart', $cart);
        } else
        {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }
    public function getCart()
    {
        if (!session()->has('cart'))
        {
            return view('shop.shopping-cart');
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    public function getcheckout()
    {
        if (!session()->has('cart'))
        {
            return view('shop.shopping-cart');
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }
    public function postCheckout(Request $request)
    {
        if (!session()->has('cart'))
        {
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);

        $order = new Order();
        $order->cart = serialize($cart);
        $order->address = $request->input('address');
        $order->name = $request->input('name');
        $adressto = $request->input('email');

        Auth::user()->orders()->save($order);

        Mail::to($adressto)->send(new confirm());
        
        Session::forget('cart');
        return redirect()->route('product.shop')->with('success', 'Successfully purchased products');
    }
}

