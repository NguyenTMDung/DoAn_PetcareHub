<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $totalRevenue = $this->getTotalRevenue();
        $totalBills = $this->countTotalBills();
        $newCustomersCount = $this->countNewCustomersInCurrentMonth();
        return view('admin.admin_home', [
            'totalRevenue' => $totalRevenue,
            'totalBills' => $totalBills,
            'newCustomersCount' => $newCustomersCount
        ]);
    }

    private function getTotalRevenue()
    {
        // Sử dụng query builder để gọi function
        $result = DB::select("SELECT GetTotalRevenue() AS totalRevenue ");

        // Trích xuất kết quả từ kết quả truy vấn
        $totalRevenue = $result[0]->totalRevenue;

        return $totalRevenue;
    }

    private function countTotalBills()
    {
        // Sử dụng query builder để gọi function
        $result = DB::select("SELECT CountTotalBills() AS totalBills");

        // Trích xuất kết quả từ kết quả truy vấn
        $totalBills = $result[0]->totalBills;

        return $totalBills;
    }
    private function countNewCustomersInCurrentMonth()
    {
        // Sử dụng query builder để gọi function
        $result = DB::select("SELECT CountNewCustomersInCurrentMonth() AS newCustomersCount");

        // Trích xuất kết quả từ kết quả truy vấn
        $newCustomersCount = $result[0]->newCustomersCount;

        return $newCustomersCount;
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
        if ($admin->role == 'Customer') {
           return back()->withErrors([
                'email' => 'Tài khoản này không có quyền admin.',
            ]);
        }
    
        // Đăng nhập và chuyển hướng đến trang admin
        Auth::login($admin);
        $request->session()->put('admin', $admin);
        return redirect('/admin');
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin-login');
    }
    
}
