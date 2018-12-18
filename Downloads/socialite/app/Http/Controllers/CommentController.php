<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\User;
use App\Comment;

class CommentController extends Controller
{   

    public function __construct(){
        $this->middleware('auth');
    }

    

    public function submit_comment(Request $request){
     
        
       $this->validate($request,[
         'comments'=> 'required|string',
        ]);
        
        $id=Auth::user()->id;

        $comment = new Comment([
            
            'comments'=>$request->comments,
            'post_id'=>$request->post_id,
            'user_id'=>$id,
   
           ]);

        
           if($comment->save()){
            return redirect()->back()->with('status','Your comment is sent');
        }else{
            return redirect()->back()->with('status','comment sending failed');
        } 
      
       
    }

    public function showComment($id){
       //The below gets the post details of a particular route id
        $post=Post::whereId($id)->first();

        
        return view('social.comment',compact('post'));
    }
}       
       
       
       
        
       
       
        
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        /*
        $this->validate($request, [

            'comments'=> 'required|string',

        ]);

       
        
        $id=Auth::user()->id;
    
        $comment = new Comment([
     
        'comments'=>$request->comments,
        'user_id'=>$id,
        'post_id'=>$request->post_id

        ]);

        $comment->save();
        return redirect()->back();


    
    
    public function showComment(){

    $rose = Comment::all();
    return view('social.user')->with('rose, $rose');
    

    }*/



