<?php

namespace App\Controllers;

use App\Models\AuthUserModel;
use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthController extends ResourceController
{
    private $key = "MY_SECRET_KEY"; // ⚠️ Isko apna strong secret key banakar .env me rakhna better hai

    public function register()
    {
        $userModel = new AuthUserModel();

        $data = $this->request->getJSON(true);

        // check if email already exists
        if ($userModel->where('email', $data['email'])->first()) {
            return $this->fail("Email already registered");
        }

        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

        $userModel->insert($data);

        return $this->respondCreated(["message" => "User registered successfully"]);
    }

    public function login()
    {
        $userModel = new AuthUserModel();
        $data = $this->request->getJSON(true);

        $user = $userModel->where('email', $data['email'])->first();

        if (!$user || !password_verify($data['password'], $user['password'])) {
            return $this->failUnauthorized("Invalid email or password");
        }

        $payload = [
            "iss" => "localhost",  // Issuer
            "aud" => "localhost",  // Audience
            "iat" => time(),       // Issued at
            "exp" => time() + 3600,// Expiration (1 hour)
            "uid" => $user['id']
        ];

        $jwt = JWT::encode($payload, $this->key, 'HS256');

        return $this->respond(["token" => $jwt]);
    }
}
