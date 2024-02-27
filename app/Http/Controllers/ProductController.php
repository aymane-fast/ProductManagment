<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function ProductList(){
        $products = Product::all();
        return view(('ListProduct') , compact('products'));
        
    }
    function ProductAddV(){
        return view('AddProduct');
    }
    function ProductAdd(Request $request){
        $data = $request->all();
        Product::create($data);
        return redirect('/');
    }
    function ProductUpdateRedirect($id){
        $product = Product::find($id);
        return view('UpdateProduct', compact('product'));
    }
    function EditProduct(Request $request, $id){
        $data = $request->all();
        $product = Product::find($id);
        $product->update($data);
        return redirect('ListProduct');
    }
    function ProductDelete($id){
        Product::destroy($id);
        return redirect('ListProduct');
    }
}
