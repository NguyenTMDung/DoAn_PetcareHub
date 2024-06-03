<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\ProductSize;

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

        $cartItems = Cart::select('carts.*', 'product.name', 'product.image', 'product_sizes.price')
        ->join('product', 'carts.product_id', '=', 'product.id')
        ->join('product_sizes', function ($join) {
            $join->on('carts.product_id', '=', 'product_sizes.product_id')
                ->whereColumn('carts.size', '=', 'product_sizes.size');
        })
        ->where('carts.user_id', $userId)
        ->get();

        $prices = ProductSize::select('product_id', 'size', 'price')
        ->whereIn('product_id', $cartItems->pluck('product_id')->unique())
        ->get()
        ->groupBy(['product_id', 'size']);
    
        // dd($cartItems);
        $sizes = ProductSize::where('product_id', $cartItems->pluck('product_id')->unique()->toArray())
        ->pluck('size')->unique();
        
        // dd($prices);
        return view('pages.giohang', compact('cartItems', 'sizes', 'prices'));
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

    public function getProductPrice(Request $request)
    {
        $productId = $request->input('product_id');
        $size = $request->input('size');

        // Tìm giá của sản phẩm dựa trên product_id và kích thước
        $productPrice = ProductSize::where('product_id', $productId)
            ->where('size', $size)
            ->value('price');

        // Trả về giá dưới dạng JSON
        return response()->json(['price' => $productPrice]);
    }

    public function deleteCartItem(Request $request)
    {
        $cartItemId = $request->input('cart_item_id');

        // Xóa sản phẩm khỏi giỏ hàng
        Cart::destroy($cartItemId);

        // Trả về phản hồi thành công
        return response()->json(['success' => true]);
    }
}
