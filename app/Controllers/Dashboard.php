<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('/dashboard/home');
    }

    public function jadwal()
    {
        // Logika untuk mengambil data jadwal dari model
        $data['jadwal'] = []; // Isi dengan data jadwal sebenarnya
        return view('/dashboard/jadwal', $data);
    }

    public function beli()
    {
        return view('/dashboard/beli');
    }

}

