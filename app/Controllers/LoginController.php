<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        // Retrieve the submitted form data
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Find the user by email
        $user = $this->findUserByEmail($email);

        if (!$user) {
            // Email not found
            return $this->emailNotFound();
        }

        // Validate the password
        if (!$this->validatePassword($password, $user['password'])) {
            // Incorrect password
            return $this->incorrectPassword();
        }

        // Successful login
        return redirect()->to('dashboard');
    }

    private function findUserByEmail($email)
    {
        // You can implement your own logic here to find the user by email
        // For simplicity, we'll check against the sample user data

        $users = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => '$2y$10$dtAJbyQRvB/.tGYb0n7Wju0ngTad50F5SQbzYk33V5qrWjI7olKqi' // Hashed password for 'secret'
            ],
            // Add other user data here
        ];

        foreach ($users as $user) {
            if ($user['email'] === $email) {
                return $user;
            }
        }

        return null;
    }

    private function validatePassword($password, $hashedPassword)
    {
        // You can implement your own logic here to validate the password
        return password_verify($password, $hashedPassword);
    }

    private function emailNotFound()
    {
        // Display an error message for email not found
        $data['error'] = 'Email not found';
        return view('login', $data);
    }

    private function incorrectPassword()
    {
        // Display an error message for incorrect password
        $data['error'] = 'Incorrect password';
        return view('login', $data);
    }
}
