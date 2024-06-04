<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy thông tin khách hàng
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $birthdate = $_POST['birthdate'];
            $confirmEmail = $_POST['confirm_email']; // Thêm email xác nhận
            $phone = $_POST['phone'];
        
            // Validate and sanitize data (very important!)
            if ($email !== $confirmEmail) {
                echo json_encode(['message' => 'Email xác nhận không khớp.']);
                exit; // Dừng xử lý nếu email không khớp
            }
            // ... các bước xác thực khác (email hợp lệ, số điện thoại hợp lệ, ...)
        
            // Lấy thông tin đặt lịch từ modal "addModal"
            $pet = isset($_POST['pet']) ? $_POST['pet'] : null; // Kiểm tra xem có chọn thú cưng không
            $datlich = $_POST['datlich'];
            $time = $_POST['time'];
            $spaServices = isset($_POST['spa']) ? $_POST['spa'] : []; // Lấy mảng các dịch vụ spa
            $hotel = isset($_POST['hotel']) ? $_POST['hotel'] : null; // Lấy loại khách sạn
            $sizeSpa = isset($_POST['size_spa']) ? $_POST['size_spa'] : null; // Lấy kích thước thú cưng (spa)
            $sizeHotel = isset($_POST['size_hotel']) ? $_POST['size_hotel'] : null; // Lấy kích thước thú cưng (hotel)
            $quantity = $_POST['quantity'];
        
            // Tính toán số lượng dịch vụ và tổng giá tiền
            $serviceQuantity = count($spaServices) + (empty($hotel) ? 0 : 1); // Số lượng dịch vụ
            // ... (Thêm logic tính tổng giá dựa trên dịch vụ đã chọn và loại khách sạn)
        
            // Lưu thông tin vào CSDL (ví dụ: sử dụng Eloquent ORM của Laravel)
            $appointment = new Appointment;
            $appointment->fullname = $fullname; 
            $appointment->email = $email;
            $appointment->address = $address;
            $appointment->birthdate = $birthdate; 
            $appointment->phone = $phone;
            $appointment->pet = $pet;
            $appointment->datlich = $datlich; 
            $appointment->time = $time;
            $appointment->hotel = $hotel; 
            $appointment->size_spa = $sizeSpa; 
            $appointment->size_hotel = $sizeHotel; 
            $appointment->quantity = $quantity; 
            $appointment->service_quantity = $serviceQuantity;
            // $appointment->service_price = $totalPrice; // Lưu tổng giá (bạn cần tính trước)
            $appointment->save();
        
            // Gửi phản hồi JSON cho JavaScript
            echo json_encode(['message' => 'Đặt lịch thành công!']);
        }
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
