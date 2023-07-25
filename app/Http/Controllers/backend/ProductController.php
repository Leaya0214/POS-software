<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\backend\Product;

use function Ramsey\Uuid\v1;

class ProductController extends Controller
{
    public function add()
    {
        return view("backend.pages.product.manageproduct");
    }

    public function store(Request $rqst)
    {
        $valid = Validator::make($rqst->all(), [
            'name' => 'required',
            'des' => 'required',
            'size' => 'required',
            'color' => 'required',
            'prd_code' => 'required',
            'cost_price' => 'required',
            'sales_price' => 'required'
        ]);
        if ($valid->fails()) {
            return response()->json([
                "status" => "failed",
                "errors" => $valid->messages()
            ]);
        } else {
            $data = new Product;
            $data->name = $rqst->name;
            $data->des = $rqst->des;
            $data->size = $rqst->size;
            $data->color = $rqst->color;
            $data->prd_code = $rqst->prd_code;
            $data->cost_price = $rqst->cost_price;
            $data->sales_price = $rqst->sales_price;
            $data->save();
            return response()->json([
                "status" => "success"
            ]);
        }
    }
}
