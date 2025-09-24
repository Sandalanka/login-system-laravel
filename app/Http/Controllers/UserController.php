<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Interfaces\AuthenticateRepositoryInterface;

class UserController extends Controller
{
    private AuthenticateRepositoryInterface $authenticateRepositoryInterface;
    
    /**
     * __construct
     *
     * @param  mixed $authenticateRepositoryInterface
     * @return void
     */
    public function __construct(AuthenticateRepositoryInterface $authenticateRepositoryInterface){
       $this->authenticateRepositoryInterface = $authenticateRepositoryInterface;
    }
    
    /**
     * register
     *
     * @param  mixed $request
     * @return void
     */
    public function register(RegisterRequest $request){
        try{
            DB::beginTransaction();
            $userDetails = [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'password' => bcrypt( $request->input('password'))
            ];
            $register = $this->authenticateRepositoryInterface->register($userDetails);
            DB::commit();
            return redirect()->back();
        }catch(\Exception $exception){
            DB::rollback();
            Log::error($exception);
            return redirect()->back();
        }
    }
    
    /**
     * login
     *
     * @param  mixed $request
     * @return void
     */
    public function login(LoginRequest $request){
        try{
            $userDetails = [
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ];
            $login = $this->authenticateRepositoryInterface->login($userDetails);
            if($login){
                return view('home');
            }
            return redirect()->back();
        }catch(\Exception $exception){
            Log::error($exception);
            return redirect()->back();
        }
    }
    
    /**
     * logout
     *
     * @return void
     */
    public function logout(){
        try{
            $this->authenticateRepositoryInterface->logout();
            return redirect('/');
        }catch(\Exception $exception){
            Log::error($exception);
            return redirect()->back();
        }
    }
}
