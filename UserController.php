<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userDetails;
use Auth;
use DB;

class UserController extends Controller
{
    public function login(Request $request){
        return view('login');
    }

    public function userLogin(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) { 
            return redirect('welcome');
        }else{
            return back()->withErrors([
                'username' => 'Input credentails are wrong',
            ]);
        }
    }

    
    public function loanData(){        
        $loanData = DB::table('loan_details')->get();
        return view ('loanDetails',compact('loanData')); 
    }

    public function processData(){
        
       DB::statement('Drop table if EXISTS emi_details');   

        $minDate = DB::table('loan_details')->min('first_payment_date');
        $maxDate = DB::table('loan_details')->max('last_payment_date');

        DB::statement('create table emi_details (
            id int primary KEY,
            first_payment_date date,
            last_payment_date date,
        )');

        return redirect('processData');
    }
   
}
