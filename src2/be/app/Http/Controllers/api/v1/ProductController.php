<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Resources\ProductResource;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use ApiResponseHelpers;

class ProductController extends Controller
{
    public function index(){
        $product = Product::paginate(10);
        return ProductResource::collection($product);
    }
    public function store(ProductCreateRequest $request){
        $validate = $request->validated();
        $validate['photo'] = $validate['photo']->storeAs('product',$request['name']).".".$validate['photo']->extension();
        $create = Product::create($validate);
        return new ProductResource($create);
    }
    public function show($id){
        $data = Product::where('id',$id)->first();
        return new ProductResource($data);
    }
    public function update($id, ProductUpdateRequest $request){
        $old = Product::where('id',$id)->first();

        if(empty($old)){ return response()->json((['message'=>'No data','code'=>404])); }
        
        $validate = $request->validated();
        $validate['photo'] = $request->file('photo') ? $request->file('photo')->storeAs('product',$request['name']).".".$request->file('photo')->extension() : $old->photo;
        
        Product::where('id',$id)->update($validate);
        
        return response()->json(['message'=>'Product updated successfuly']);
    }
    public function destroy($id){

        $product = Product::where('id',$id)->first();

        if(!empty($product)){
            $product->delete();

            return response()->json(['message'=>'Product deleted successfuly']);
        }
        return response()->json(['message'=>'Product not found!'],404);
    }
}
