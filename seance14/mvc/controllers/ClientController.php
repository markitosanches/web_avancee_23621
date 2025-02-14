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

    public function show($data=[]){
        if(isset($data['id'])&& $data['id']!=null){
            $client = new Client;
            if($selectId = $client->selectId($data['id'])){
                return View::render('client/show', ['client'=>$selectId]);
            }else{
                return View::render('error', ['msg'=>'Client doesn t exist']);
            }
            
        }
        return View::render('error');
    }

    public function store($data=[]){
       $client = new Client;
       $insert = $client->insert($data);
       if($insert){
            return view::redirect('client/show?id='.$insert);
       }else{
        return View::render('error');
       }

    }
}