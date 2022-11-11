<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use Illuminate\Support\Str;
use File;
class CategoryController extends Controller
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
        return view('admin.pages.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoryRequest $request)
    {
         //validation
         $this->validate($request, [
            "title" => "required|min:3",
            "icon" => "required|image|mimes:png,jpg,jpeg|max:2048",
        ]);

        //add data
        if ($request->has("icon")) {
            $file = $request->icon;
            $imageName = "images/categories/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/categories"), $imageName);
            $title = $request->title;

            Category::create([
                "title" => $title,
                "slug" => Str::slug($title),
                "icon" => $imageName,
            ]);
            return redirect()->route("add.category")
                ->withSuccess("Category added");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view('admin.pages.category.update')->with([
            'category'=>$category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoryRequest  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoryRequest $request, category $category)
    {
        //validation
        $this->validate($request, [
            "title" => "required|min:3",
            "icon" => "image|mimes:png,jpg,jpeg|max:2048",  
        ]);

        //update data
        if ($request->has("icon")) {
            $image_path = public_path("images/categories/" . $category->icon);
            if (File::exists($image_path)) {
                unlink($image_path);
            }
            $file = $request->image;
            $imageName = "images/categories/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/categories"), $imageName);
            $category->icon = $imageName;
        }
        $title = $request->title;
        $category->update([
            "title" => $title,
            "slug" => Str::slug($title),
            "icon" =>  $category->icon,
        ]);
        return redirect()->route("edit.category")
            ->withSuccess("Category updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
          //delete image
        $image_path = public_path($category->icon);
          if (File::exists($image_path)) {
            unlink($image_path);
          }
       $category->delete();
       return redirect()->back();
    }
}
