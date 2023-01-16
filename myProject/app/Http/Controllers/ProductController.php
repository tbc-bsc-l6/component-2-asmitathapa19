<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    //
    function insert(Request $req){
        $name= $req->get('pname');
        $price= $req->get('pprice');
        $image= $req->file('pimage') ->GetClientOriginalName();
        
        $req->pimage->move(public_path('pimages'),$image);

       $prod =new product();
       $prod ->PName = $name;
       $prod ->PPrice = $price;
       $prod ->PImage =$image;
       $prod ->save();
       return redirect('/crud');
       
    }
    function readdata(){
        $pdata = product::all();
        return view('insertRead', ['data'=> $pdata]);
    }
}
