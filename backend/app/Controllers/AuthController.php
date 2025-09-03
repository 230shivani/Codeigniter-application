<?php

namespace App\Controllers;

use App\Models\AuthUserModel;
use CodeIgniter\RESTful\ResourceController;

class AuthController extends ResourceController
{
    public function register()
    {
        $userModel = new AuthUserModel();

        $data = $this->request->getJSON(true);

        $userModel->insert([
            'email' => $data['email'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'password' => password_hash($data['password'], PASSWORD_BCRYPT),
        ]);

        return $this->respond(['message' => 'User registered successfully']);
    }

    public function login()
    {
        return $this->respond(['message' => 'Login API coming soon']);
    }
}
