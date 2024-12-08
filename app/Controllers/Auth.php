<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        return view('auth/login'); // Menampilkan halaman login
    }

    public function process()
    {
        $session = session();
        $model = new UserModel();

        // Mengambil variabel dari form login
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Ambil user berdasarkan username
        $user = $model->where('username', $username)->first();

        // Verifikasi username dan password
        if ($user && password_verify($password, $user['password'])) {
            // Set session jika login berhasil
            $session->set(['logged_in' => true, 'username' => $username, 'role' => $user['role']]);

            // Redirect berdasarkan role
            if ($user['role'] === 'admin') {
                return redirect()->to('/admin'); // Redirect ke dashboard admin
            } else {
                return redirect()->to('/customer'); // Redirect ke dashboard customer
            }
        } else {
            // Jika gagal, set flashdata untuk pesan error
            $session->setFlashdata('msg', 'Username atau Password salah');
            return redirect()->to('/login'); // Redirect kembali ke halaman login
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Hapus session
        return redirect()->to('/login'); // Redirect ke halaman login
    }

    public function register()
    {
        helper(['form']); // Memastikan helper form di-load
        return view('auth/register'); // Menampilkan halaman registrasi
    }

    public function registerProcess()
    {
        helper(['form']); // Memastikan helper form di-load
        $model = new UserModel();

        // Mengambil variabel dari form registrasi
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $no_telp = $this->request->getVar('no_telp'); // Mengambil no_telp dari form
        $password = $this->request->getVar('password');
        $password_confirm = $this->request->getVar('password_confirm');

        // Validasi data
        if ($password !== $password_confirm) {
            session()->setFlashdata('msg', 'Password tidak cocok');
            return redirect()->to('/register');
        }

        // Cek apakah username sudah ada
        if ($model->where('username', $username)->first()) {
            session()->setFlashdata('msg', 'Username sudah digunakan');
            return redirect()->to('/register');
        }

        // Cek apakah email sudah ada
        if ($model->where('email', $email)->first()) {
            session()->setFlashdata('msg', 'Email sudah terdaftar');
            return redirect()->to('/register');
        }

        // Hash password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke database, termasuk no_telp
        if (
            $model->save([
                'username' => $username,
                'email' => $email,
                'no_telp' => $no_telp, // Menyimpan no_telp
                'password' => $password_hash,
                'role' => 'customer' // Semua pengguna yang mendaftar diatur sebagai customer
            ])
        ) {
            session()->setFlashdata('msg', 'Registrasi berhasil, silakan login');
            return redirect()->to('/login'); // Redirect ke halaman login setelah registrasi
        } else {
            session()->setFlashdata('msg', 'Registrasi gagal, silakan coba lagi.');
            return redirect()->to('/register'); // Kembali ke halaman registrasi jika ada kesalahan
        }
    }
}
