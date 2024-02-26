<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function ProductList(){
        $products = ProductModel::all();
        return view(('ListProduct') , compact('products'));
        
    }
    function ProductAddV(){
        return view('AddProduct');
    }
    function ProductAdd(Request $request){
        $data = $request->all();
        ProductModel::create($data);
        return redirect('/');
    }
    function ProductDelete($id){
        ProductModel::destroy($id);
        return redirect('ListProduct');
    }
}
