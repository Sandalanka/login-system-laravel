<?php

namespace App\Interfaces;

interface AuthenticateRepositoryInterface
{    
    /**
     * register
     *
     * @param  mixed $data
     * @return void
     */
    public function register(array $data);
        
    /**
     * login
     *
     * @param  mixed $data
     * @return void
     */
    public function login(array $data);

        
    /**
     * logout
     *
     * @return void
     */
    public function logout();
}
