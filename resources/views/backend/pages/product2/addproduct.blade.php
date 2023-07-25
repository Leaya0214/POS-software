@extends('backend.templates.master')
    @section('content')
    <div class="text">
        <h4>Product Add</h4>
    <h6>Create new product</h6>
    </div>
     <form action="" method="POST" enctype="multipart/form-data">
        <div class="px-4">
            <div class="container product">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" class="form-control" name="product_name">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="">Category</label>
                            <input type="text" class="form-control" name="cate_id">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="">Sub Category</label>
                            <input type="text" class="form-control" name="subcate_id">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="">Brand</label>
                            <input type="text" class="form-control" name="brand_id">
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Unit</label>
                        <input type="text" class="form-control" name="unit_id">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">SKU</label>
                        <input type="text" class="form-control" name="product_id">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Minimum quantity</label>
                        <input type="text" class="form-control" name="minimum_qty">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <input type="text" class="form-control" name="quantity">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Discount</label>
                        <input type="text" class="form-control" name="discount">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Discount Price</label>
                        <input type="text" class="form-control" name="discount_price">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" class="form-control" name="status">
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <label for="">Image</label>
                        <input type="file" id="selectedFile"  class="form-control" name="thumbnail" style="display:none">
                        <i class="fa-solid fa-upload"></i>
                        <input type="button" class="form-control image" onclick="document.getElementById('selectedFile').click();" />
                    </div>
                </div>
                <button type="submit" class="btn-save btn btn-lg mt-3 ">Save</button>
                <button type="button" class=" btn-cancle btn btn-lg mt-3 ">Cancle</button>
        </div>
        </div>
     </form>
    @endsection

    @if(Session::has("message"))
    <script>
        toastr.success("{{session:message}}");
    </script>
    @endif
    
