<?php

namespace App\Controllers;

use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;


class AuthController{

    public function index(){
        return View::render('auth/index');
    }

    public function store($data=[]){

        $validator = new Validator;
        $validator->field('username', $data['username'])->required()->max(50)->email();
        $validator->field('password', $data['password'])->min(6)->max(20);

        if($validator->isSuccess()){
            $user = new User;
            $check = $user->checkUser($data['username'],$data['password']);
            if($check){
                // print_r($_SESSION);
                return View::redirect('clients');
                
            }else{
                $errors['credential'] = "Please check your credentials!";
                return View::render('auth/index', ['errors'=>$errors, 'user'=>$data]);
            }

        }else{
           
            $errors = $validator->getErrors();
            return View::render('auth/index', ['errors'=>$errors, 'user'=>$data]);

        }

    }

    public function delete(){
        session_destroy();
        return View::redirect('login');
    }
}