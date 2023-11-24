<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Exception;

class LoginFbController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $fbUser = Socialite::driver('facebook')->user();
            
            // Lưu thông tin người dùng vào cơ sở dữ liệu
            $user = User::updateOrCreate(
                ['email' => $fbUser->getEmail()],
                [
                    'name' => $fbUser->getName(),
                    'facebook_id' => $fbUser->getId()
                ]
            );
            $userData = [
                'name' => $fbUser->getName(),
                'facebook_id' => $fbUser->getId(),
                'email' => $fbUser->getEmail(),
                'avatar' => $fbUser->getAvatar(),
            ];
            session::put('user', $userData); // Lưu thông tin người dùng vào session
            
            return redirect('/home');   // Chuyển hướng đến trang Home
        } catch (Exception $e) {
            // In lỗi để kiểm tra
            dd($e->getMessage());
        }
    }

    public function logoutFacebook()
    {
        Session::forget('user');
        return redirect('/');
    }
}
