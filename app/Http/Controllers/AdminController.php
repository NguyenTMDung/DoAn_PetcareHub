<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Appointment;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
 use App\Http\Controllers\console;
 use Illuminate\Support\Facades\Log;
  


class AdminController extends Controller
{
    public function checkadmin(){
    
        $admin = Auth::user();
        if($admin){
            return true;
        }
        return false;
    }


    public function xuLyDatLich(Request $request)
{
    // Validate dữ liệu
    $validatedData = $request->validate([
        'fullname' => 'required',
        // ... (các quy tắc validate khác)
    ]);

    // Lưu vào database
    Appointment::create($validatedData);

    // Trả về phản hồi (nếu cần)
    return response()->json(['message' => 'Đặt lịch thành công']);
}



    public function trangchu(){
        if(!$this->checkadmin()) {
            return redirect('/admin-login');
        }
        // $totalRevenue = $this->getTotalRevenue();
        // $totalBills = $this->countTotalBills();
        // $newCustomersCount = $this->countNewCustomersInCurrentMonth(); 
        return view('admin.admin_home'
        // , [
        //     'totalRevenue' => $totalRevenue,
        //     'totalBills' => $totalBills,
        //     'newCustomersCount' => $newCustomersCount
        // ]
        );
    }


    //  private function getTotalRevenue()
    // {
    //     // Sử dụng query builder để gọi function
    //     $result = DB::select("SELECT GetTotalRevenue() AS totalRevenue ");

    //     // Trích xuất kết quả từ kết quả truy vấn
    //     $totalRevenue = $result[0]->totalRevenue;

    //     return $totalRevenue;
    // }

    // private function countTotalBills()
    // {
    //     // Sử dụng query builder để gọi function
    //     $result = DB::select("SELECT CountTotalBills() AS totalBills");

    //     // Trích xuất kết quả từ kết quả truy vấn
    //     $totalBills = $result[0]->totalBills;

    //     return $totalBills;
    // }
    // private function countNewCustomersInCurrentMonth()
    // {
    //     // Sử dụng query builder để gọi function
    //     $result = DB::select("SELECT CountNewCustomersInCurrentMonth() AS newCustomersCount");

    //     // Trích xuất kết quả từ kết quả truy vấn
    //     $newCustomersCount = $result[0]->newCustomersCount;

    //     return $newCustomersCount;
    // } 

   

    public function Login(){
        return view('admin.admin_login');
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
    public function ThongKe($date){
        Log::info('ThongKe function was called with date: ' . $date);
        if(!$this->checkadmin()) {
            return redirect('/admin-login');
        }
        
        $date = $date;
        $count = DB::table('order')
            ->where('order.created_at', 'like', '%'.$date.'%')
            ->count();
        $total = DB::table('order')
          
            ->where('order.created_at', 'like', '%'.$date.'%')
            ->sum('order.total');
        $user= DB::table('users')
            ->where('date_join', 'like', '%'.$date.'%')
        ->count(); 
        $response = [
            'count' => $count,
            'total' => $total,
            'user' => $user,
        ];
        
        return response()->json($response);
    }
    public function ThongKeDH($startOfWeek, $endOfWeek){
       


        $endOfWeek = \Carbon\Carbon::parse($endOfWeek)->addDay();
        Log::info('ThongKeDH function was called with startOfWeek: ' . $startOfWeek . ' and endOfWeek: ' . $endOfWeek);
        if(!$this->checkadmin()) {
            return redirect('/admin-login');
        }
        
       
        $orderofweek = DB::table('order')
                    ->select(DB::raw('DATE(order.created_at) as date'), DB::raw('count(*) as count'))
                    ->whereBetween('order.created_at', [$startOfWeek, $endOfWeek])
                    ->groupBy(DB::raw('DATE(order.created_at)'))
                    ->get(); 
    


        $response = [
            'orderofweek' => $orderofweek,
        ];
        
        return response()->json($response);


    // }
}
public function ThongKeDT($startOfWeek, $endOfWeek){
        
    Log::info('ThongKeDT function was called with startOfWeek: ' . $startOfWeek . ' and endOfWeek: ' . $endOfWeek);
    if(!$this->checkadmin()) {
        return redirect('/admin-login');
    }
    
    $endOfWeek = \Carbon\Carbon::parse($endOfWeek)->addDay();
                
     $totalPerDay = DB::table('order')
                 ->select(DB::raw('DATE(order.created_at) as date'), DB::raw('SUM(order.total) as total'))
                 ->whereBetween('order.created_at', [$startOfWeek, $endOfWeek])
                 ->groupBy('date')
                 ->get();
                
    $response = [
        'totalPerDay' => $totalPerDay,
        // 'total' => $total,
        // 'user' => $user,
    ];
    
    return response()->json($response);


// }
}
}
