<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index(){
        $products = Product::paginate(5);
        return view('admin.product.index',['products'=>$products]);
    }
    public function show($id){
        
    }
    public function store(ProductCreateRequest $request){
        $validate = $request->validated();
        $validate['photo'] = $this->storeFile($request->file('photo'));
        $create = Product::create($validate);
        return back()->with('success','Success create Product!');
    }
    public function fetchProduct($id){
        $product = Product::find($id);
        if(empty($product)){ return false; }
        return $product;
    }
    public function update(ProductUpdateRequest $request){
        $old = Product::where('id',$request->id)->first();

        if(empty($old)){ return back()->with('error','Failed update, data not found!'); }
        
        $validate = $request->validated();
        $validate['photo'] = $request->file('photo') ? $this->storeFile($request->file('photo')): $old->photo;
        
        Product::where('id',$request->id)->update($validate);

        return back()->with('success','Success Update Product!');
    }
    public function destroy(Request $request){
        $product = Product::where('id',$request->id)->first();
        if(!empty($product)){
            $product->delete();
            return back()->with('success','Success Delete Product!');
        }
        return back()->with('error','Failed delete, data not found!');
    }
}
