<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use File;

class SlideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function addSlide(){
        return view('admin.pages.slide.add');
    }
    public function addOffer(){
        return view('admin.pages.slide.addOffer');
    }
    public function editSlide(){
        return view('admin.pages.slide.edit')->with([
            'slides'=>Slide::all(),
        ]);
    }
    public function edit(slide $slide){
        return view('admin.pages.slide.update')->with([
            'slide' => $slide,
        ]);
    }
    public function store(Request $request)
    {
         //validation
         $this->validate($request, [
            "title" => "required|min:3",
            "description" => "required|min:5",
            "image" => "required|mimes:png,jpg,jpeg|max:2048",
            "link" => "required",
        ]);
       //add data image
        if ($request->has("image")) {
            $file = $request->image ;
            $imageName = "images/slides/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/slides"), $imageName);
        }

        Slide::create([
            "title" => $request->title,
            "description" => $request->description,
            "link" => $request->link,
            "image" => $imageName,
        ]);
    return redirect()->route('add.slide')
        ->with('message', 'Slide added succesfuly');;
    }

    public function storeOffer(Request $request)
    {
         //validation
         $this->validate($request, [
            "title" => "required|min:3",
            "description" => "required|min:5",
            "image" => "required|mimes:png,jpg,jpeg|max:2048",
            "link" => "required",
        ]);
       //add data image
        if ($request->has("image")) {
            $file = $request->image ;
            $imageName = "images/slides/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/slides"), $imageName);
        }

        $offer = Slide::create([
            "title" => $request->title,
            "description" => $request->description,
            "link" => $request->link,
            "image" => $imageName,
            "is_offer"=>1
        ]);
   
    return redirect()->route("edit.slide")
        ->withSuccess("offer added");
    }
    
    public function update(Request $request, slide $slide)
    {
        //validation
        $this->validate($request, [
            "title" => "required|min:3",
            "image" => "image|mimes:png,jpg,jpeg|max:2048",
            "description"=>"required",
            "link"=>"required"  
        ]);

        //update data
        if ($request->has("image")) {
            $image_path = public_path("images/slides/" . $slide->icon);
            if (File::exists($image_path)) {
                unlink($image_path);
            }
            $file = $request->image;
            $imageName = "images/slides/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/slides"), $imageName);
            $slide->icon = $imageName;
        }
        
        $slide->update([
            "title" => $request->title,
            "link"=>$request->link,
            "description"=>$request->description,
            "image" =>  $slide->image,
        ]);
        return redirect()->route("edit.slide")
            ->withSuccess("slide updated");
    }

    public function destroy(slide $slide)
    {
          //delete image
        $image_path = public_path($slide->image);
          if (File::exists($image_path)) {
            unlink($image_path);
          }
       $slide->delete();
       return redirect()->back();
    }
    
}
