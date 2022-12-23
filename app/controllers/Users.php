<?php
class Users extends Controller {

    public function __construct()
    {
    }

    public function register() {
        $data = [];
        $this->view('users/register', $data);
    }

    public function login() {
        $data = [];
        $this->view('users/login', $data);
    }
}