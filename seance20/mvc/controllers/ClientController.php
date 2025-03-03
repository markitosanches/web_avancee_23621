<?php

namespace App\Controllers;
use App\Models\Client;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;

class ClientController{

    public function index(){
       $client = new Client;
       $select = $client->select('name');
       //print_r($select);
      //include('views/client/index.php');
      return View::render('client/index', ['clients' => $select]);
    }

    public function create(){
        Auth::session();
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
        Auth::session();
        $validator = new Validator;
        $validator->field('name', $data['name'])->min(3)->max(25);
        $validator->field('address', $data['address'])->max(45);
        $validator->field('phone', $data['phone'])->max(20);
        $validator->field('zip_code', $data['zip_code'], "Zip code")->number()->max(10);
        $validator->field('email', $data['email'])->required()->max(45)->email();

        if($validator->isSuccess()){
            $client = new Client;
            $insert = $client->insert($data);
            if($insert){
                 return view::redirect('client/show?id='.$insert);
            }else{
             return View::render('error');
            }
        }else{
            $errors = $validator->getErrors();
            return View::render('client/create', ['errors'=>$errors, 'client'=>$data]);
        }
    }

    public function edit($data=[]){
        Auth::session();
            if(isset($data['id'])&& $data['id']!=null){
                $client = new Client;
                if($selectId = $client->selectId($data['id'])){
                    return View::render('client/edit', ['client'=>$selectId]);
                }else{
                    return View::render('error', ['msg'=>'Client doesn t exist']);
                }
                
            }
            return View::render('error');
    }

    public function update($data=[], $get=[]){
        Auth::session();
        $validator = new Validator;
        $validator->field('name', $data['name'])->min(3)->max(25);
        $validator->field('address', $data['address'])->max(45);
        $validator->field('phone', $data['phone'])->max(20);
        $validator->field('zip_code', $data['zip_code'], "Zip code")->number()->max(10);
        $validator->field('email', $data['email'])->required()->max(45)->email();

        if($validator->isSuccess()){
               $client = new Client;
               $update = $client->update($data, $get['id']);
                if($update){
                    return view::redirect('client/show?id='.$get['id']);
                }else{
                    return View::render('error');
                }
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('client/edit', ['errors'=>$errors, 'client'=>$data]);
        }

    }

    public function delete($data=[]){
        if(Auth::session()){
            $id = $data['id'];
            $client = new Client;
            $delete = $client->delete($id);
            if($delete){
                return view::redirect('clients');
            }else{
                return View::render('error');
            }
        }
    }

}