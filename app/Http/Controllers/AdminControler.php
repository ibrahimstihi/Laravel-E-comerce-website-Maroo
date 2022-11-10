<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Category;
use App\Models\slide;

class AdminControler extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')
            ->except(["showAdminLoginForm", "adminLogin"]);
    }

    public function index()
    {
        return view("admin.pages.home")->with([
            "products" => Product::all(),
            "orders" => Order::all(),
            "users" => User::all()
        ]);
    }

    public function showAdminLoginForm()
    {
        return view("admin.auth.login");
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (auth()->guard("admin")->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->get("remember"))) {
            return redirect("/admin");
        } else {
            return redirect()->route("admin.login");
        }
    }

    public function adminLogout()
    {
        auth()->guard("admin")->logout();
        return redirect()->route("admin.login");
    }
    //Product
    public function editProduct(){
        return view('admin.pages.product.edit')->with([
            'products'=>Product::all(),
        ]);
    }
    //Order
    public function getPaypalOrder(){
        return view('admin.pages.order.paypal')->with([
            'orders'=>Order::all(),
        ]);
    }
    public function getCodOrder(){
        return view('admin.pages.order.cod')->with([
            'orders'=>Order::all(),
        ]);
    }
    //Category
    public function editCategory(){
        return view('admin.pages.category.edit')->with([
            'categories'=>Category::all(),
        ]);
    }

    //Brands 
    

    
    
}
