<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    public function store()
    {
        $rules = [
            'first_name' => 'required|min_length[2]|max_length[100]',
            'last_name'  => 'required|min_length[2]|max_length[100]',
            'email'      => 'required|valid_email|max_length[191]|is_unique[users.email]',
            'mobile'     => 'required|min_length[10]|max_length[20]',
            'password'   => 'required|min_length[8]',
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $userModel->insert([
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'      => $this->request->getPost('email'),
            'mobile'     => $this->request->getPost('mobile'),
            'password'   => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),
            'status'     => 1,
        ]);

        return redirect()
            ->to('/login')
            ->with('success', 'Registration successful. Please login.');
    }
    public function login()
{
    return view('auth/login');
}

public function authenticate()
{
    $rules = [
        'email'    => 'required|valid_email',
        'password' => 'required',
    ];

    if (!$this->validate($rules)) {
        return redirect()
            ->back()
            ->withInput()
            ->with('errors', $this->validator->getErrors());
    }

    $userModel = new UserModel();

    $user = $userModel
        ->where('email', $this->request->getPost('email'))
        ->where('status', 1)
        ->first();

    if (!$user || !password_verify(
        $this->request->getPost('password'),
        $user['password']
    )) {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Invalid email or password.');
    }

    session()->set([
        'user_id'    => $user['id'],
        'user_name'  => $user['first_name'] . ' ' . $user['last_name'],
        'user_email' => $user['email'],
        'isLoggedIn' => true,
    ]);

    return redirect()->to('/dashboard');
}
public function logout()
{
    session()->destroy();

    return redirect()
        ->to('/login')
        ->with('success', 'You have been logged out successfully.');
}
}