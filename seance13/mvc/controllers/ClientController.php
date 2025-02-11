<?php

namespace App\Controllers;
use App\Models\Client;
use App\Providers\View;

class ClientController{

    public function index(){
       $client = new Client;
       $select = $client->select('name');
       //print_r($select);
      //include('views/client/index.php');
      return View::render('client/index', ['clients' => $select]);
    }

    public function create(){
        return View::render('client/create');
    }
}