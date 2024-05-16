<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\slider;

class SliderController extends Controller
{
    use ValidatesRequests;
    public function index(){
        $sli = slider::all();
        return view('admin.admin_quanlyslider')->with('sli',$sli);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'place' => 'required',
        ]);
        $sli = new slider;
        $sli->image = $request->input('image');
        $sli->place = $request->input('place');
       
        $sli->save();
        Session::put('message', 'Thêm slider thành công!');
        return Redirect::to('/quan-ly-slider');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required',
            'place' => 'required',
        ]);
        $sli = slider::find($id);
        $sli->image = $request->input('image');
        $sli->place = $request->input('place');
       
        $sli->save();
        Session::put('message', 'Sửa slider thành công!');
        return Redirect::to('/quan-ly-slider');
    }

    public function destroy($id)
    {
        $sli = slider::find($id);
        $sli->delete();

        Session::put('message', 'Đã xóa slider!');
        return Redirect::to('/quan-ly-slider');
    }
}
