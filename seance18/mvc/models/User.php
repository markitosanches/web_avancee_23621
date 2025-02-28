<?php

namespace App\Models;
use App\Models\CRUD;

class User extends CRUD{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['username', 'name', 'password', 'privilege_id', 'email'];

   final public function hashPassword($password, $cost = 10){
        $options = [
            'cost' => $cost
        ];
       return password_hash($password, PASSWORD_BCRYPT, $options);
    }
    
}
