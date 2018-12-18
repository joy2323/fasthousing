<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function submit_post(Request $request){

        $this->validate($request, [
            'content' => 'required|string',
            'post_image' => 'required'

        ]);
        //Get file name with extension
      $filenameWithExt = $request->file('post_image')->getClientOriginalName(); 

        //Get just the file name without extension
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
       
        //Get just the just file extension eg: .jpg with the file name
        $extension = $request->file('post_image')->getClientOriginalExtension();
        
        //Create the new file name it will store in the database
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        

        //this is the storing area or path that will store it in the database or Upload image
        $path = $request->file('post_image')->storeAs('public/post_image', $filenameToStore);
        
        $id=Auth::user()->id;
        $post = new Post([
         'content'=>$request->content,
         'post_image'=>$filenameToStore,
         'user_id'=>$id

        ]);
        
        $post->save();
        return redirect()->back();          
        
    }

    //This function is used to store all the posts gotten from the database
    public function showPost(){
        $show = Post::where('user_id', Auth::user()->id)->get();

        return view('social.user', compact('show'));
    
    }

    

}
