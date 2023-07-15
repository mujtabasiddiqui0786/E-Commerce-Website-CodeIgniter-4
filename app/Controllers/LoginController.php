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

        // Store user session
        $session = session();
        $userData = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'isLoggedIn' => true
            // Add other user data if needed
        ];
        $session->set($userData);

        // Successful login, redirect to marketplace
        return redirect()->to('/marketplace');
    }

    private function findUserByEmail($email)
    {
        $db = \Config\Database::connect(); // Assuming you have configured your database properly
        $user = $db->table('users')->where('email', $email)->get()->getRowArray();

        return $user;
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

    public function logout()
    {
        // Retrieve the session instance
        $session = session();

        // Destroy the session data
        $session->destroy();

        // Redirect to the login page
        return redirect()->to('/login');
    }

}
