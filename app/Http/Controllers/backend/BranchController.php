<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
   public function add(){
    return view('backend.pages.branch.add');
   }

   public function store(Request $request){
      $request->validate([
         'br_name'=>'required',
         'br_manager'=>'required',
         'phone'=>'required',
         'email'=>'required'
      ]);
      $branch = new Branch;

      $branch->br_name = $request->br_name;
      $branch->br_manager = $request->br_manager;
      $branch->phone = $request->phone;
      $branch->email = $request->email;
      $branch->status = $request->status;

      $branch->save();
      return redirect()->route('branchmanage');

   }
   public function show(){
      $show = Branch::all();
      return view('backend.pages.branch.manage',compact('show'));

   }
   public function destroy($id){
      $data = Branch::find($id);
      $data->delete();
      return redirect()->route('branchmanage');
   }
}
