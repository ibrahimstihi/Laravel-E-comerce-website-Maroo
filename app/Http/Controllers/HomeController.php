<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome')->with([
            "products"=>Product::latest()->paginate(8),
            "categories"=>Category::has("products")->get(),
            "items"=>\Cart::getContent(),
        ]);
    }
    public function getProductByCategory(Category $category){
        $products = $category->products()->paginate(8);
        return view('welcome')->with([
            "products"=>$products,
            "categories"=>Category::has("products")->get()
        ]);
    }
}