<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class HomeController extends Controller
{
   public function index ()
   {
    return view('admin_Dashboard');
   }
   public function homepage(){
      return view('home_page');
   }

   public function viewTasks()
   {
       $tasks = auth()->user()->tasks;
       return view('usertask', compact('tasks'));
   }

}
