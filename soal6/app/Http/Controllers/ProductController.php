<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cashier;
use App\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products=product::all();
        return view('product.index',compact('products'));  
    }

    public function tambah()
    {
        $cashiers=cashier::all();
        $categories=category::all();        
        return view('product.tambah',compact('cashiers','categories'));
    }

    public function add(Request $request)
    {
        $product = new product();
        $product->id_cashier = $request->cashier;
        $product->name = $request->name;
        $product->id_category = $request->category;
        $product->price = $request->price;
        $product->save();
        return redirect('/product');
    }

    public function edit(product $id)
    {
        $cashiers=cashier::all();
        $categories=category::all();
        return view('product.edit', compact('id','cashiers','categories'));
    }

    public function update(Request $request, product $id)
    {
        $value = product::find($id->id);
        $value->id_cashier = $request->cashier;
        $value->name = $request->name;
        $value->id_category = $request->category;
        $value->price = $request->price;
        $value->update();
        return redirect('/product');
    }

    public function delete(product $id)
    {
        $delete = product::find($id->id);
        $delete->delete();
        return redirect('/product');
    }
}
