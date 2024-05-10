<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();
class CategoryProductController extends Controller
{
    public function show_cagetoryProduct(){
        $all_category_product=DB::table('category')->get();
        $manage_category_product= view('admin.admin_danhmucsp')->with('all_category_product',$all_category_product);
        return view('admin_layout')->with('admin.admin_danhmucsp',$manage_category_product);
    }
    public function save_cagetoryProduct(Request $request){
        $data = array();
        $data['name'] = $request->category_name;
        
        DB::table('category')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công!');
        return Redirect::to('admin-quan-ly-danh-muc-sp');
    }
    public function edit_cagetoryProduct($id){
        $edit_category_product = DB::table('category')->where('id',$id)->get();
    }
    public function delete_cagetoryProduct(){
        
    }
}
