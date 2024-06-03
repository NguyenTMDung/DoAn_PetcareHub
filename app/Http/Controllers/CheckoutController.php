<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function processCheckout(Request $request)
    {
        // Lấy danh sách các sản phẩm đã chọn từ yêu cầu
        $selectedItems = $request->input('selected_items');

        return view('pages.thanhtoan');
    }
}
