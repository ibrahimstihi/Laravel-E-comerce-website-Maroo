<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use File;

class brandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.pages.brand.index')->with([
            'brands' => brand::all(),
        ]);
    }

    public function create()
    {
        return view('admin.pages.brand.add');
    }

    public function store(Request $request)
    {
         //validation
         $this->validate($request, [
            "title" => "required|min:3",
            "logo" => "required|image|mimes:png,jpg,jpeg|max:2048",
        ]);

        //add data
        if ($request->has("logo")) {
            $file = $request->logo;
            $imageName = "images/brands/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/brands"), $imageName);
            $title = $request->title;

            brand::create([
                "title" => $title,
                "logo" => $imageName,
            ]);
            return redirect()->route("add.brand")
                ->withSuccess("Brand Added");
        }
    }

    public function destroy(brand $brand)
    {
          //delete image
        $image_path = public_path($brand->logo);
          if (File::exists($image_path)) {
            unlink($image_path);
          }
       $brand->delete();
       return redirect()->back();
    }


}
