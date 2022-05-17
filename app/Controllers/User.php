<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Login | Monitoring Kinerja Sales'
        ];
        $login = $this->request->getPost('Auth.loginAction');
        return view('pages/dahsboard', $data);
    }
}
