<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function logout()
    {
        $session = session();
        if ($session) {
            session_destroy();

            return redirect()->to('login');
        }
    }
}
