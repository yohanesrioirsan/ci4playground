<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Page'
        ];

        helper(['form']);

        return view('login', $data);
    }


    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();

        if ($data) {
            $pass = $data['password'];
            // $verify_pass = password_verify($password, $pass);

            if ($pass === $password) {
                $session_data = [
                    'username' => $data['username'],
                    'logged_in' => TRUE
                ];
                $session->set($session_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');

                return redirect()->to('/login');
            }
        } else {

            $session->setFlashdata('msg', 'Wrong Username');
            return redirect()->to('/login');
        }
    }
}
