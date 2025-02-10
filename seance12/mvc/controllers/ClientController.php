<?php

namespace App\Controllers;
use App\Models\Client;

class ClientController{

    public function index(){
       $client = new Client;
       $select = $client->select('name');
       print_r($select);
    }
}