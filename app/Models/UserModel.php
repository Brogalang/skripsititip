<?php

namespace App\Models;

use CodeIgniter\Model;
//insialisasi depedensi utk tangkap data get/post
use CodeIgniter\HTTP\RequestInterface;

class UserModel extends Model
{
    //membuat variable multi function dan turunannya
    protected $db;
    protected $request;
    protected $table = 'data_sales';

    public function __construct()
    {
        //inisialisasi koneksi
        $this->db = \Config\Database::connect();
        $this->request = \Config\Services::request();
    }

    public function selectdatasales()
    {
        //pembuatan query
        $sql = "SELECT * FROM data_sales";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    public function selectdatacust()
    {
        //pembuatan query
        $sql = "SELECT * FROM customer";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    public function insertsales()
    {
        //tangkap data post
        $userID = $this->request->getVar('userID');
        $nama = $this->request->getVar('nama_sales');
        $witel = $this->request->getVar('witel');
        $noTelp = $this->request->getVar('no_telp');
        $mitra = $this->request->getVar('mitra');
        $posisi = $this->request->getVar('posisi');
        $tglAktif = $this->request->getVar('tgl_aktif');
        $spv = $this->request->getVar('spv');
        //dd($nama);

        $data = [
            'userID' => $userID,
            'nama' => $nama,
            'witel' => $witel,
            'no_telp' => $noTelp,
            'mitra' => $mitra,
            'posisi' => $posisi,
            'tgl_aktif' => $tglAktif,
            'spv' => $spv
        ];

        //pembuatan query
        $sql = "INSERT INTO data_sales(userID, nama_sales, witel, no_telp, mitra, posisi, tgl_aktif, spv)
                    VALUES('$userID', '$nama', '$witel', '$noTelp', '$mitra', '$posisi', '$tglAktif', '$spv')";

        //eksekusi query sql
        // exit("Warning:$sql");
        $this->db->query($sql);

        return;
    }

    protected $allowedFields = [
        'email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
        'userID', 'nama_sales', 'witel', 'no_telp', 'mitra', 'posisi', 'tgl_aktif', 'spv',
    ];

    protected $validationRules = [
        'email'         => 'required|valid_email|is_unique[users.email,id,{id}]',
        'username'      => 'required|alpha_numeric_punct|min_length[3]|max_length[30]|is_unique[users.username,id,{id}]',
        'password_hash' => 'required',
    ];
}
