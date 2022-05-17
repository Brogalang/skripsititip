<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Login | Monitoring Kinerja Sales'
        ];
        echo view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'tittle' => 'Forgot Password | Monitoring Kinerja Sales'
        ];
        return view('Auth/register', $data);
    }
}
