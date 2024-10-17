<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(){
        
        $products = Product::orderBy('id','DESC')->get();
        return view('product',[
            'products' => $products
        ]);
    }

    public function create(){

        return view('create');
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'qty'  => 'required',
            'price' => 'required'
        ]);

        if($validator->passes()){
            $product = new Product();
            $product->name  = $request->name;
            $product->price = $request->price;
            $product->qty  = $request->qty;

            $product->save();

            return redirect()->route('product.index')->with("success","Product created successful");
        }else{
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
    }

    public function edit(){
        return view('edit');
    }

    public function destroy(string $id){
        $product = Product::find($id);

        $product->delete();

        return redirect()->back()->with('success','Product deleted successful');
    }
}
