<?php

namespace App\Controllers;

use App\Models\ExampleModel;


class HomeController{

    public function index(){
        $model = new ExampleModel;
        //$data = "Peter";
        $data = $model->getData();
       include('views/home.php');
    }


    public function about(){
        echo "Hello about";
    }
}