<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class ProfilController extends BaseController
{
    public function index()
    {
        $session = session();
        $userModel = new UserModel();

        $userId = $session->get('user_id');

        if (!$userId) {
            return redirect()->to('login');
        }

        $userDataFromDB = $userModel->find($userId);

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

        return view('v_profil', $data);
    }
}