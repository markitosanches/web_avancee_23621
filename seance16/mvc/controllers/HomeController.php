<?php

namespace App\Controllers;

use App\Models\ExampleModel;
use App\Providers\View;


class HomeController{

    public function index(){
    //     $model = new ExampleModel;
    //     //$data = "Peter";
    //     $data = $model->getData();
    //    include('views/home.php');
        return View::render('home', ['name' => 'Peter']);

    }


    public function about(){
        echo "Hello about";
    }
}