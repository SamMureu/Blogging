<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Task;
use App\Models\Post;


class admincontroller extends Controller
{
    public function taskForm()
    {
        $users = User::all();
        return view('admintask', compact('users'));
    }

    public function assignTask(Request $request)
    {
        // Validate the incoming request data...

        $task = new Task();
        $task->user_id = $request->user_id;
        $task->description = $request->description;
        $task->save();

        return redirect()->back()->with('success', 'Task assigned successfully!');
    }
    //
    public function admin_post(){
return view('adminpost');
    }
    public function add_post(Request $request)
    {
        $user=Auth()->user();
        $user_id =$user->id;
        $name =$user->name;
        $usertype =$user->usertype;
        $post =new Post();
        
        $post->name= $name;
        $post->usertype= $usertype;
        $post->user_id= $user_id;
        $post->description= $request->description;
        $image=$request->image;
        if($image) 
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $post->image = $imagename;
        }
       $post->post_status='active';
        $post->save();
        return redirect()-> back()->with('message','post added sucessfully');


    }


    public function adminview(){

        $view = Post::all();

        return view('adminview',compact('view'));
    }

    public function delete_post($id){
     $del = Post::find($id);
     $del->delete();
     return redirect()->back()->with('message','post delete succesfully');
    }
    public function update_post($id){
        $up = Post::find($id);
        $up->update();
        return redirect()->back()->with('message','post updated succesfully');
    }
}
