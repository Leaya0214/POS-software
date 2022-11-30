@extends('backend.templates.master')
    @section('content')

    <h2 style="padding:0 25px; color:black">Add Product</h2>
    <div class="col-md-4 mt-3 border border-primary rounded">
        <form action="{{ route('branchstore') }}" method="POST">
            @csrf
        <div class="form-group mt-3">         
            <input  class="form-control" type="text" name="br_name" placeholder="Enter branch name"> 
            <span style="color: red">
              @error('br_name')
              {{$message}}
              @enderror  
            </span>     
        </div>
        <div class="form-group">         
            <input  class="form-control" type="text" name="br_manager" placeholder="Enter branch manager name">      
            <span style="color: red">
                @error('br_manager')
                {{$message}}
                @enderror  
              </span> 
        </div>
        <div class="form-group">         
            <input  class="form-control" type="text" name="phone" placeholder="Enter phone number">      
            <span style="color: red">
                @error('phone')
                {{$message}}
                @enderror  
              </span> 
        </div>
        <div class="form-group">         
            <input  class="form-control" type="email" name="email" placeholder="Enter branch email">      
            <span style="color: red">
                @error('email')
                {{$message}}
                @enderror  
              </span> 
        </div>
        <div class="form-group">         
         <select name="status" class="form-control" >
            <option value="">-------select status</option>
            <option value="1">Active</option>
            <option value="2">Inactive</option>
         </select>
        </div>

        <button type="submit" class=" btn btn-primary btn-lg mb-3">Save</button>
        </form>
    </div>
    @endsection 

    

    