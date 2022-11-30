@extends('backend.templates.master')
    @section('content')
    <div class="row">
        
    <div class="col-md-4 border border-info shadow rounded mt-3 pt-2">
        <span class="alert alert-success msg" style="display: none"></span>
        <div class="form-group p-0">
            <input type="text" class="form-control name" placeholder="Enter product name">
            <span class="text-danger error_name"></span>
        </div>
        <div class="form-group p-0">
            <textarea cols="20" rows="5" class="form-control des" placeholder="Enter Product description"></textarea>
            <span class="text-danger error_des"></span>
        </div>
        <div class="form-group p-0">
            <select class="form-control size">
                <option value="">---- Select size----</option>
                <option value="XL">xl</option>
                <option value="L">lg</option>
                <option value="M">m</option>
                <option value="SM">sm</option>
            </select>
            <span class="text-danger error_size"></span>
        </div>
        <div class="form-group">
            <input type="color" class="form-control color">
            <span class="text-danger error_color"></span>
        </div>
        <div class="form-group p-0">
            <input type="number" class="form-control prd_code" placeholder="Enter product code">
            <span class="text-danger error_prd_code"></span>
        </div>
        <div class="form-group p-0">
            <input type="number" class="form-control cost_price" placeholder="Enter cost price">
            <span class="text-danger error_cost_price"></span>
        </div>
        <div class="form-group p-0">
            <input type="number" class="form-control sales_price" placeholder="Enter sales price">
            <span class="text-danger error_sales_price"></span>
        </div>
        <button class="btn btn-primary add-btn mb-3">Add</button>
    </div>
    <div class="col-md-8 mt-3">
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Description</th>
                <th>Color</th>
                <th>Size</th>
                <th>Cost price</th>
                <th>Sales price</th>
                <th>Action</th>
            </thead>
            <tbody class="alldata">

            </tbody>
        </table>
    </div>
    </div>
@endsection 

    

    