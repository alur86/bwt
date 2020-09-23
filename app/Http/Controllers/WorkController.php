<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Country;
use App\Models\User;

class WorkController extends Controller
{
 


  

    public function index()
    {
        
       
       $users=User::join('companies', 'user_id','=','users.id')->join('countries','country_id','=','countries.id')->where('title', '=', 'Canada')->get();

     

       return view('work.index',compact('users'));

    }








}
