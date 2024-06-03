<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\ProductSize;

class CheckoutController extends Controller
{
    public function processCheckout(Request $request)
    {
        // Lấy danh sách các id_cart đã chọn từ giỏ hàng
        $selectedItems = $request->input('selected_items');

        $selectedItemsArray = explode(',', $selectedItems);


        $cartItems = Cart::select('carts.*', 'product.name', 'product.image', 'product_sizes.price')
        ->join('product', 'carts.product_id', '=', 'product.id')
        ->join('product_sizes', function ($join) {
            $join->on('carts.product_id', '=', 'product_sizes.product_id')
                ->whereColumn('carts.size', '=', 'product_sizes.size');
        })
        ->whereIn('carts.id', $selectedItemsArray)
        ->orderBy('carts.id', 'desc')
        ->get();

        return view('pages.thanhtoan', compact('cartItems'));
    }
}
