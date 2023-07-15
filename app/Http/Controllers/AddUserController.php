<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adduser;
use Carbon\Carbon;
use Session;

class AddUserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }
    public function index(){
        $user= adduser::orderBy('id','DESC')->get();
        return view('admin.adduser.alluser',compact('user'));
 
      }
 

    public function add(){
        return view('admin.adduser.adduser');
    }

    public function edit(){

    }

    public function view(){

    }

    public function insert(){
        $insert= adduser::insert([
            'name'=>$_POST['name'],
            'phone'=>$_POST['phone'],
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
            'userrole'=>$_POST['userrole'],
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        
        if($insert){
            Session::flash('success','value');
            return redirect('admin/adduser/add');
        }else{
           Session::flash('error','value');
           return redirect('admin/adduser/add');
        }
    }


    
}
