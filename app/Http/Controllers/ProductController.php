<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\type_product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;

class ProductController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        $pro = product::all();
        $typ = type_product::all();
        return view('admin.admin_sanpham')->with('pro', $pro)->with('typ', $typ);
    }

    public function showByPetandCateId($pet, $cate_id){
        if($pet == 'dog') $pet='Chó';
        else $pet='Mèo';
        $pro = DB::table('product')
            ->join('typeProduct', 'product.typeProduct_name', '=', 'typeProduct.name')
            ->join('category', 'typeProduct.category_name', '=', 'category.name')
            ->select('Product.*')
            ->where('category.id', '=', $cate_id)
            ->where('pet', '=', $pet)
            ->get();
        return view('pages.sanpham', ['pro' => $pro]);
    }

    public function detailProduct(){
        return view('pages.chitietsp');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'pet' => 'required',
            'typeProduct_name' => 'required',
            'price' => 'required',
            'inventory' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $pro = new product;
        $pro->name = $request->input('name');
        $pro->pet = $request->input('pet');
        $pro->typeProduct_name = $request->input('typeProduct_name');
        $pro->price = $request->input('price');
        $pro->inventory = $request->input('inventory');
        $pro->description = $request->input('description');

        $get_image = $request->file('image'); 
        $get_name_img = $get_image->getClientOriginalName();
        $name_img = current(explode('.', $get_name_img));
        $new_image =$name_img.rand(0,99) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move('public/storage/products',  $new_image);
        $pro->image = $new_image;
        $pro->save();
        Session::put('message', 'Thêm sản phẩm thành công!');
        return Redirect::to('/quan-ly-san-pham');
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'role' => 'required',
        //     'date_join' => 'required',
        // ]);

        $pro = product::find($id);
        $pro->name = $request->input('name');
        $pro->pet = $request->input('pet');
        $pro->typeProduct_name = $request->input('typeProduct_name');
        $pro->price = $request->input('price');
        $pro->image = $request->input('image');
        $pro->inventory = $request->input('inventory');
        $pro->description = $request->input('description');

        $pro->save();
        Session::put('message', 'Chỉnh sửa sản phẩm thành công!');
        return Redirect::to('/quan-ly-san-pham');
    }

    public function destroy($id)
    {
        $pro = product::find($id);
        $pro->delete();

        Session::put('message', 'Đã xóa sản phẩm!');
        return Redirect::to('/quan-ly-san-pham');
    }
    public function getProduct($id)
    {
        $pro = product::find($id);
        return response()->json($pro);
    }

    public function updateNewStatus($id, Request $request)
    {
        $pro = product::find($id);
        $pro->new = $request->new;
        $pro->save();
        return response()->json(['message' => 'Cập nhật trạng thái mới thành công.']);
    }

    public function updateBestSellerStatus($id, Request $request)
    {
        $pro = product::find($id);
        $pro->bestseller = $request->bestseller;
        $pro->save();
        return response()->json(['message' => 'Cập nhật trạng thái mới thành công.']);
    }
}
