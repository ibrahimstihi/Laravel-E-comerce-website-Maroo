<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\category;

class CartController extends Controller
{
    //return cartitems
    public function index(){
        return view("cart.index")->with([
            "items"=>\Cart::getContent(),
            "categories"=>category::all()
        ]);
    }
    //add item to cart
    public function addProductToCart(Request $request,Product $Product){
        \Cart::add(array(
            'id'=>$Product->id,
            'name' => $Product->title,
            'price' => $Product->price,
            'image' => $Product->image,
            'quantity' =>$request->qty,
            'attributes' => array(),
            'associatedModel' => $Product
        ));
        return redirect()->route("cart.index")->with('message', 'New items add to cart');
    }
        //edit item on cart
    public function updateProductOnCart(Request $request,Product $product){
        \Cart::update($product->id,[
                'quantity' => array(
                    'relative'=>false,
                    'value'=>$request->qty
                ),
                
        ]);
        return redirect()->route("cart.index");
    }

        //remove item from cart :
    public function removeProductOnCart(Product $product){
        \Cart::remove($product->id);
            return redirect()->route("cart.index");
    }

}
