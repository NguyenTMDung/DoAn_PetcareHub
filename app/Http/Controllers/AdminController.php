<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function trangchu(){
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
        $result = DB::select("SELECT GetTotalRevenue() AS totalRevenue");

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
}
