<?php

namespace App\Controllers;

use App\Models\UserModel;

class AccountController extends BaseController
{
    protected $user;

    function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $session = session();
        $userId = $session->get('user_id');

        if (!$userId) {
            return redirect()->to('login');
        }

        $userDataFromDB = $this->user->find($userId);

        if (!$userDataFromDB) {
            $session->destroy();
            return redirect()->to('login')->with('error', 'Data pengguna tidak ditemukan atau tidak valid.');
        }

        $data = [
            'username'    => $userDataFromDB['username'],
            'role'        => $userDataFromDB['role'],
            'email'       => $userDataFromDB['email'],
            'waktu_login' => date('Y-m-d H:i:s'),
            'status'      => 'isLogged in',
        ];

        return view('v_account', $data); // Menggunakan view v_account.php
    }

    // Anda bisa menambahkan method lain di sini, misalnya untuk menangani perubahan password
}