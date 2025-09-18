<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\CLI\Console;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $userModel = new UserModel();
        $username  = $this->request->getPost('username');
        $password  = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'isLoggedIn' => true,
                'username'   => $user['username'],
                'role'       => $user['role']
            ]);

            // ✅ redirect by role
            if ($user['role'] === 'admin') {
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->to('/user/dashboard');
            }
        }

        return redirect()->back()->with('error', 'Invalid login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
