<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Privilege;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;

class UserController{

    public function __construct(){
        Auth::session();
        Auth::privilege(1);
    }

    public function create(){
        $privilege = new Privilege;
        $select = $privilege->Select();
        return View::render('user/create', ['privileges' => $select]);
    }

    public function store($data=[]){

        $validator = new Validator;
        $validator->field('name', $data['name'])->min(3)->max(25);
        $validator->field('username', $data['username'])->unique('User')->required()->max(50)->email();
        $validator->field('password', $data['password'])->min(6)->max(20);
        $validator->field('privilege_id', $data['privilege_id'], "Privilege")->number()->required();
        
        if($validator->isSuccess()){
            // print_r($data);
            // echo "<br>";
            $data['email'] = $data['username'];
            $user = new User;
            $data['password'] = $user->hashPassword($data['password']);
            // print_r($data);
            // die();
            $insert = $user->insert($data);
            if($insert){
                return view::redirect('login');
            }
        }else{
            $errors = $validator->getErrors();
            $privilege = new Privilege;
            $select = $privilege->Select();
            return View::render('user/create', ['errors'=>$errors, 'user'=>$data, 'privileges' => $select]);

        }
    }
}