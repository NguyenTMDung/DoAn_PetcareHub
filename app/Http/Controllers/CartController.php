<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index(){
        if (auth()->check()) {
            // Nếu người dùng đã đăng nhập, lấy user_id từ user hiện tại
            $userId = auth()->id();
        } else {
            // Nếu không, lấy session_id của phiên làm việc hiện tại
            $userId = session()->getId();
        }

        // Lấy các sản phẩm trong giỏ hàng của người dùng hiện tại
        $cartItems = Cart::where('user_id', $userId)->get();

        // Lấy thông tin chi tiết của từng sản phẩm
        foreach ($cartItems as $item) {
            $item->product = Product::find($item->product_id);
        }

        return view('pages.giohang', compact('cartItems'));
    }
    public function addToCart(Request $request, $id)
    {
        $cart_action = $request->input('cart_action');
        $size = $request->input('size');
        $quantity = $request->input('quantity');
        $userId = $request->input('user_id');

        // Tạo một đối tượng Cart mới
        if ($cart_action === 'add_to_cart') {
            $cart = new Cart();
            $cart->user_id = $userId;
            $cart->product_id = $id;
            $cart->size = $size;
            $cart->num = $quantity;
            $cart->save();

            $cartCount = Cart::where('user_id', $userId)->count('id');

            return response()->json(['success' => true, 'cartCount' => $cartCount]);
        } elseif ($cart_action === 'buy_now') {
        }
        return response()->json(['success' => false]);
    }

    public function getCartCount(Request $request){
        $userId = $request->input('user_id');
        $cartCount = Cart::where('user_id', $userId)->count('id');
        return response()->json(['cartCount' => $cartCount]);
    }
}
