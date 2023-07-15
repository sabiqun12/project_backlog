<?php

namespace App\Http\Controllers;

use App\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    
    public function index()
    {
        $todolist = Todolist::all();
        return view('admin.todolist.todolist',compact('todolist'));
    }


   
    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);

        Todolist::create($data);
        return back();
        
    }


    public function destroy(Todolist $todolist)
    {
        $todolist-> delete();
        return back();
    {
        
    }
}
}
