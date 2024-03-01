<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Register Page'
        ];

        return view('register', $data);
    }

    public function new()
    {
        $rules = [
            'username' => 'required|is_unique[user.username]',
            'password' => 'required|min_length[8]|max_length[50]'
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();

            $data = [
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password')
            ];

            $userModel->save($data);

            session()->setFlashdata('msg', 'New User Added!');

            return redirect()->to('login');
        } else {
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }
    }
}
