<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;
use Session;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('admin');
      }

      public function index(){
        $allUser=User::orderBy('id','DESC')->get();
        return view('admin.user.all',compact('allUser'));
 
      }
 

    public function add(){
        return view('admin.user.add');
    }

    public function edit(){

    }

    public function view(){

    }

    public function insert(){
        $insert= User::insert([
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

    }
}


