<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function ProductListV(){
        return view('ListProduct');
    }
    function ProductAddV(){
        return view('AddProduct');
    }
    function ProductList(){
        
    }
    function ProductAdd(Request $request){
        $data = $request->all();
        ProductModel::create($data);
        return redirect('/');
    }
    function ProductDelete(){

    }
}