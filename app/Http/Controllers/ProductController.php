<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use App\Cart;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function getIndex(){
        $products = Product::all();
        
        return view('shop.index', ['products' => $products]);
    }
    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.index');
    }
    public function getReduceByOne($id) {
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
    public function getRemoveItem($id){
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else{
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }
    public function getCart(){
        if (!session()->has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    public function getcheckout(){
        if (!session()->has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }
    public function postCheckout(Request $request){
        if (!session()->has('cart')){
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);

        $order = new Order();
        $order->cart = serialize($cart);
        $order->address = $request->input('address');
        $order->name = $request->input('name');

        Auth::user()->orders()->save($order);

        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Successfully purchased products');
    }
}
