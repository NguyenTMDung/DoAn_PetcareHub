<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function  ForgetPassword()
    {
       return view('pages.forgetpass');
    }
    public function checkCustomer() {
        if (session('isLoggedIn')) {
           return true;
        } else {
            return false;
        }
    }
    public function index(){
        return view('pages.home');
    }
    public function Account(){
      if(!$this->checkCustomer()) {
            return redirect('/login');
        }
        return view('pages.account');
    }
    public function Login(){
        return view('pages.login');
    }
    public function Logout(Request $request){
        $request->session()->forget('isLoggedIn');
        return redirect('/trang-chu');
    }
     public function Signin(){
        
        return view('pages.signin');
    }
        public function Register(Request $request){
       
        $customer = new customer;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->date_join = \Carbon\Carbon::now(); // Laravel's Carbon
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->role = 'customer';
        // var_dump($customer->name, $customer->phone, $customer->date_join, $customer->email, $customer->password, $customer->role);
        // die();
        if (empty($customer->email) || empty($customer->password)|| empty($customer->name)|| empty($customer->phone)){
            return back()->withErrors([
                'password' => 'Vui lòng nhập đầy đủ thông tin.',
            ]);
        }
        if (!filter_var($customer->email, FILTER_VALIDATE_EMAIL)) {
            return back()->withErrors([
                'email' => 'Email không hợp lệ.',
            ]);
        }
        if (customer::where('email', $customer->email)->exists()) {
            return back()->withErrors([
                'email' => 'Email đã tồn tại.',
            ]);
        }
        
        if (strlen($customer->phone) < 10 || strlen($customer->phone) > 11) {
            return back()->withErrors([
                'phone' => 'Số điện thoại không hợp lệ',
            ]);
        }
        $customer->save();
        
        return redirect('/login');
    }
    public function AuthLogin(Request $request){
        $customer_email = $request->email;
        $customer_password = $request->password;
        if (empty($customer_email) || empty($customer_password)) {
            return back()->withErrors([
                'email' => 'Vui lòng nhập đầy đủ thông tin.',
            ]);
        }
        // Tìm customer với email tương ứng
        $customer = customer::where('email', $customer_email)->first();
        // Nếu không tìm thấy customer hoặc mật khẩu không đúng
        if (!$customer || $customer_password != $customer->password) {
            return back()->withErrors([
                'email' => 'Email hoặc mật khẩu không đúng.',
            ]);
        }
        // Đăng nhập và chuyển hướng đến trang account
        // Auth::login($customer);
        // $request->session()->put('customer', $customer);
        $request->session()->put('customer', $customer);
        $request->session()->put('isLoggedIn', true);
        $request->session()->put('userId', $customer->id);
        return redirect('/trang-chu');
    }
    public function ChangeInfor(Request $request){
        $customer = customer::find($request->session()->get('userId'));
        if ($request->has('name')) {
            $customer->name = $request->name;
        }
        if ($request->has('tel')) {
            $customer->phone = $request->tel;
        }
        if ($request->has('email')) {
            $customer->email = $request->email;
        }
        if ($request->has('date')) {
            $customer->date_of_birth = $request->date;
        }
        $customer->save();
        return redirect('/account');
    }
    public function GetPass(Request $request){
        $email = $request->email;
    
        $data = [
            'title' => 'Forget Password',
            'body'  => 'This is your code:',
            'random_number' => rand(100000, 999999),
        ];
    
        Mail::send('emails.reset_password', $data, function($message) use ($email) {
            $message->to($email)
                    ->subject('Reset Password')
                    ->from('PetcareHub@gmail.com', 'Petcare Hub');
        });
    
        // if (count(Mail::failures()) > 0) {
        //     // handle failed emails
        //     return response()->json(['message' => 'Mail Sent Fail'], 500);
        // } else {
        //     return response()->json(['message' => 'Mail Sent Successfully'], 200);
        // }
    }
}

