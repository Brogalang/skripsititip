<?php

namespace App\Controllers;

//inisialisasi model yg akan digunakan
use App\Models\UserModel;
//inisialisasi utk terima data post/get, validasi dll
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\AlertError;

class Pages extends Controller
{
    //multi fungsi variabel
    protected $UserModel;

    public function __construct()
    {
        //menggunakan model
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data['tittle'] = 'Dashboard | Monitoring Kinerja Sales';
        return view('pages/dashboard', $data);
    }

    public function profile()
    {
        $data['tittle'] = 'Profile | Monitoring Kinerja Sales';
        return view('pages/profile', $data);
    }

    public function sales_order()
    {
        $data['tittle'] = 'Sales Order | Monitoring Kinerja Sales';
        $data['customer'] = $this->UserModel->selectdatacust();
        return view('pages/sales_order', $data);
    }

    public function customers()
    {
        $data['tittle'] = 'Customers | Monitoring Kinerja Sales';
        $data['customer'] = $this->UserModel->selectdatacust();
        return view('pages/customers', $data);
    }

    public function data_sales()
    {
        $data['tittle'] = 'Data Sales | Monitoring Kinerja Sales';
        $data['sales'] = $this->UserModel->selectdatasales();
        //dd($data);
        return view('pages/data_sales', $data);
    }

    public function add()
    {
        $data['tittle'] = 'Tambah Data | Monitoring Kinerja Sales';
        return view('pages/add', $data);
    }

    public function add_aksi()
    {
        $data['tittle'] = 'Data Sales | Monitoring Kinerja Sales';
        $data['sales'] = $this->UserModel->insertsales();

        dd($this->request->getVar());
        return $this->response->redirect(site_url('/'));
        // return redirect()->to('/data_sales');
    }

    public function rating()
    {
        $data['tittle'] = 'Rating Result | Monitoring Kinerja Sales';
        return view('pages/rating', $data);
    }

    public function user()
    {
        $data['tittle'] = 'User | Monitoring Kinerja Sales';
        return view('pages/user', $data);
    }

    public function setting()
    {
        $data['tittle'] = 'Setting Points | Monitoring Kinerja Sales';
        return view('pages/setting', $data);
    }
}
