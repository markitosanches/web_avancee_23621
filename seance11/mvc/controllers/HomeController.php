<?php
class HomeController{

    public function index(){
       include('views/home.php');
    }


    public function about(){
        echo "Hello about";
    }
}