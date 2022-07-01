<?php
    class Pages extends Controller {
        public function __construct(){
           
        }
        
        public function index(){
            //$this->view('hello'); //must die bec view.php does not exist
            //$this->view('pages/index', ['title' => 'Welcome']); // array ['title'(key) => 'Welcome' (value)]
            $data = ['title'=> 'Welcome'];
            $this->view('pages/index', $data);
        }

        public function about(){
            $this->view('pages/about');
        }
    }