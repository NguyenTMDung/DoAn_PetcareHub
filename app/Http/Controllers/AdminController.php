<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function checkadmin(){
    
        $admin = Auth::user();
        if($admin){
            return true;
        }
        return false;
    }
    public function trangchu(){
     
        if(!$this->checkadmin()) {
            return redirect('/admin-login');
        }
        return view('admin.admin_home');
    }
    public function Login(){
        return view('pages.login');
    }

   
    public function AuthLogin(Request $request){
        $admin_email = $request->email;
        $admin_password = $request->password;
      if (empty($admin_email) || empty($admin_password)) {
        return back()->withErrors([
            'email' => 'Vui lòng nhập đầy đủ thông tin.',
        ]);
    }

        // Tìm admin với email tương ứng
        $admin = Admin::where('email', $admin_email)->first();
    
        // Nếu không tìm thấy admin hoặc mật khẩu không đúng
        if (!$admin || $admin_password != $admin->password) {
            return back()->withErrors([
                'email' => 'Email hoặc mật khẩu không đúng.',
            ]);
        }
    
        // Nếu admin không có quyền admin
        if ($admin->role != 'Admin') {
           return back()->withErrors([
                'email' => 'Tài khoản này không có quyền admin.',
            ]);
        }
    
        // Đăng nhập và chuyển hướng đến trang admin
        Auth::login($admin);
        $request->session()->put('admin', $admin);
        return view('admin.admin_home');
    }
    public function logout(){
        Auth::logout();
        return redirect('/admin-login');
    }
    
      
}
