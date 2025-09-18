<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if logged in
        if (! session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // Check role
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')
                ->with('error', 'You are not allowed to access admin pages.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Nothing needed here
    }
}
