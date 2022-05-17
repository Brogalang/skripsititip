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
        return $this->response->redirect(site_url('/tabel-sales'));
        // return view('pages/data_sales', $data);
    }
    public function updatedata()
    {
        $data2['tittle'] = 'Data Sales | Monitoring Kinerja Sales';
        $this->db = \Config\Database::connect();
        $id_sales = $this->request->getVar('id_sales');
        $userID = $this->request->getVar('userID');
        $nama = $this->request->getVar('nama_sales');
        $witel = $this->request->getVar('witel');
        $noTelp = $this->request->getVar('no_telp');
        $mitra = $this->request->getVar('mitra');
        $posisi = $this->request->getVar('posisi');
        $tglAktif = $this->request->getVar('tgl_aktif');
        $spv = $this->request->getVar('spv');
        $sql="update data_sales set userID='".$userID."', nama_sales='".$nama."', witel='".$witel."',no_telp='".$noTelp."',mitra='".$mitra."',posisi='".$posisi."',tgl_aktif='".$tglAktif."',spv='".$spv."' where id_sales='".$id_sales."'";
        $this->db->query($sql);
        return $this->response->redirect(site_url('/tabel-sales'));
    }

    public function delete($id = null){
        // $data2['tittle'] = 'Data Sales | Monitoring Kinerja Sales';
        $this->db = \Config\Database::connect();
        $sql="delete from data_sales where id_sales='".$id."'";
        $this->db->query($sql);
        return $this->response->redirect(site_url('/tabel-sales'));
    }

    public function singleData($id = null){
        $UserModel = new UserModel();
        $data['tittle'] = 'Data Sales | Monitoring Kinerja Sales';
        $data['salesobj'] = $UserModel->editdatacust($id);
        return view('pages/edit_view', $data);
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
