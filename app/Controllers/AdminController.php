<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $session = session();
        $user = $session->get('role');

        echo "<script>console.log(" . json_encode($user) . ");</script>";

        return view('dashboard/main', [
            'username' => session('username'),
            'role' => session('role'),
        ]);
    }
}
