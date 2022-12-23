<?php
class Home extends Controller {
    public function index(){
//        redirect('posts');
//        if(isLoggedIn()){
//        }
        $data = [
            'title' => 'Fitness PHP',
            'description' => 'App zum Erfassen von Fitness Übungen in PHP'
        ];

        $this->view('home/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Us',
            'description' => 'DIWE-EDV Programmierung PHP, Android Apps'
        ];

        $this->view('home/about', $data);
    }
}