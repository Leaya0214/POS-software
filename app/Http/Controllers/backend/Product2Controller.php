<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Product2;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class Product2Controller extends Controller
{
    public function index()
    {
        return view('backend.pages.product2.addproduct');
    }

    public function storeProduct(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'brand_id' => 'required',
            'cate_id'  => 'required',
            'subcate_id' => 'required',
            'product_name' => 'required',
            'product_code' => 'required',
            'unit_id' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'discount_price' => 'required',
            'thumbnail' => 'required',
            'quantity' => 'required',
            'minimum_qty' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        if ($valid->fails()) {
            echo "Information are not valid";
        } else {
            $productData = new Product2;

            $productData->brand_id = $request->brand_id;
            $productData->cate_id = $request->cate_id;
            $productData->subcate_id = $request->subcate_id;
            $productData->product_name = $request->product_name;
            $productData->slug = Str::slug($request->product_name);
            $productData->product_code = $request->product_code;
            $productData->unit_id = $request->unit_id;
            $productData->price = $request->price;
            $productData->discount = $request->discount;
            $productData->discount_price = $request->discount_price;
            $productData->thumbnail = $request->thumbnail;
            $productData->quantity = $request->quantity;
            $productData->minimum_qty = $request->minimum_qty;
            $productData->description = $request->description;
            $productData->status = $request->status;
            $productData->Date = $request->status;
        }
    }
}
