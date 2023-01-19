<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    //
    function insert(Request $req){
        $name = $req->get('PName');
        $category = $req->get('PCategory');
        $price = $req->get('PPrice');
        $image = $req->file('PImage') -> getClientOriginalName();
        //move uploaded file
        $req -> PImage ->move(public_path('pimages'), $image);

        // return $req -> input();

        // to save the inserted data into the database folder instatiate the model class product
         $product = new product();
         //since id is primary key ani autoincrement gareko cha teslai we dont need to mention
         $product -> PName =  $name;
         $product -> PCategory = $category;
         $product -> PPrice =  $price;
         $product -> PImage =  $image;
         
         //this function will save the data in database after inserting
         $product -> save();
        //after inserting again returning back to crud page
        return redirect('crud');
    }
    function readdata(){
        // $productData = product::all();
        return  view ('crud',['data' => product::paginate(2)]);
    }

    //update function
    public function updateForm(Request $req,$id){
        $products = product::findorfail($id);
        return view('updateView', ['products' => $products]);
    }
    // public function updateProduct(Request $req, $id){
    //     product::findorfail($id)->update($request->all());
    //    return redirect('crud');
    // }


    // public function shop(){
    //     $product=Product::all();
    //     return view('shop', compact('Product'));
    // }
}
