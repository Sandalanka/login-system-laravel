<?php

namespace App\Repositories;
use App\Interfaces\AuthenticateRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;

class AuthenticateRepository implements AuthenticateRepositoryInterface
{
    /**
     * register
     *
     * @param  mixed $data
     * @return void
     */
    public function register(array $data){
        return User::create($data);
    }
        
    /**
     * login
     *
     * @param  mixed $data
     * @return void
     */
    public function login(array $data){
        $login =false;
        if(Auth::attempt($data)){
           $login =true;
        }
        return $login;
    }

        
    /**
     * logout
     *
     * @return void
     */
    public function logout(){
        Auth::logout();
        Session::flush();
    }
}
