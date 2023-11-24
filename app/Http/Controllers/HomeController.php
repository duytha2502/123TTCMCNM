<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        // Kiểm tra nếu có thông tin người dùng trong session
        if (Session::has('user')) {
            $userData = Session::get('user');
            return view('home', compact('userData'));
        } else {
            return redirect('/'); // Nếu không có thông tin người dùng hoặc hết session, chuyển hướng về trang login
        }
    }
}
