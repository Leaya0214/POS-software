<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product2 extends Model
{
    use HasFactory;

    protected $fillable =[
        'brand_id',
        'cate_id',
        'subcate_id',
        'product_name',
        'slug',
        'product_code',
        'unit_id',
        'price',
        'discount',
        'discount_price',
        'thumbnail',
        'quantity',
        'minimum_qty',
        'description',
        'status'
    ];
}
