<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function dashboard()
    {
        return view(
            'dashboard/user',
            [
                'username' => session('username'),
                'role'     => session('role'),
            ]
        );
    }
}
