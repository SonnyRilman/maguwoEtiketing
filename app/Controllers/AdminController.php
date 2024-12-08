<?php

namespace App\Controllers;

use App\Models\UserModel; // Import model UserModel
use CodeIgniter\Controller;

class AdminController extends Controller 
{
    public function index()
    {
        $model = new UserModel(); // Buat instance model UserModel
        $data['customers'] = $model->getCustomers(); // Ambil semua customer

        return view('admin/dashboard', $data); // Kirim data ke halaman dashboard admin
    }
}
