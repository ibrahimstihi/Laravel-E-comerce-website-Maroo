<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

use File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:admin")->except([
            "index", "show"
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.product.add')->with([
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {
         //validation
         $this->validate($request, [
            "title" => "required|min:3",
            "description" => "required|min:5",
            // "image" => "required|mimes:png,jpg,jpeg|max:2048",
            "price" => "required|numeric",
            "category_id" => "required|numeric",
        ]);
        $title = $request->title;
        $product = Product::create([
            "title" => $title,
            "slug" => Str::slug($title),
            "description" => $request->description,
            "price" => $request->price,
            // "old_price" => $request->old_price,
            "inStock" => $request->inStock,
            "category_id" => $request->category_id,
            // "image" => $imageName,
        ]);

        //add data
        if ($request->has("image")) {

            foreach($request->file('image') as $file){
               
               $imageName = "images/products/" . time() . "_" . $file->getClientOriginalName();
               $file->move(public_path("images/products"), $imageName);
            //    $title = $request->title;
            
           ProductImage::create([
                'product_id'=> $product->id,
                'image'=>$imageName
            ]);
        }
        }
        return redirect()->route("add.product")
        ->withSuccess("Product added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('products.show')->with([
            "product"=>$product,
            "items"=>\Cart::getContent(),
            "categories"=>category::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('admin.pages.product.update')->with([
            "categories" => Category::all(),
            "product"=>$product,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //validation
        $this->validate($request, [
            "title" => "required|min:3",
            "description" => "required|min:5",
            "price" => "required|numeric",
            "category_id" => "required|numeric",
        ]);

        //update data

        $title = $request->title;
        $product->update([
            "title" => $title,
            "slug" => Str::slug($title),
            "description" => $request->description,
            "price" => $request->price,
            "old_price" => $request->old_price,
            "inStock" => $request->inStock,
            "category_id" => $request->category_id,
        ]);
        //update images
        if ($request->hasFile('image')) {

            $uploadPath = 'images/products';
            $i=1;

            foreach($request->file('image') as $file){  

                $imageName = "images/products/" . time() . "_" . $file->getClientOriginalName();
                $file->move(public_path("images/products"), $imageName);
             //    $title = $request->title;
             
                ProductImage::create([
                  'product_id'=> $product->id,
                  'image'=>$imageName
                ]);
            }
            return redirect()->route("admin.index")
            ->withSuccess("Product updated");
        }

        return redirect()->route("edit.product")
            ->withSuccess("Product updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
         //delete data
         foreach($product->product_images as $image){
             $image_path = public_path($image->image);
           if (File::exists($image_path)) {
             unlink($image_path);
           }
        }
        $product->delete();
        return redirect()->back();
    }
}
