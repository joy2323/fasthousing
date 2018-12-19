<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;


class UserController extends Controller
{
    //
    public function create(){
        $id=Auth::user()->id;

        $profile = User::whereId($id)->first();
        // dd($profile->profile);
        return view ('user.profile', compact('profile')) ;
    }
    public function store(Request $request){
        //dd($request->all());
         $id = Auth::user()->id;
        $profile = new Profile([
            'company_name'=>$request->company_name,
            'company_address'=>$request->company_address,
            'email'=>$request->email,
            'bank_name'=>$request->bank_name,
            'website'=>$request->website,
            'account_number'=>$request->account_number,
            'phone_no'=>$request->phone_no,
            'feedback'=>$request->feedback,
            'images'=>$request->images,
            'user_id'=>$id
        ]);
             $profile->save();
                return redirect('/user/view_profile');
        // Profile::create(request(['company_name','company_address','email',
        // 'website','account_number','phone_no','feedback']));
        // return redirect('/user/profile');
        
       
    }

    //code for viewing users information
    public function view(){
        $id= Auth::user()->id;
        $profile=User::whereId($id)->first();
        return view('user.view_profile',compact('profile'));
    }


    //code for editing and updating company's profiles
    public function edit($id){
        $profile=Profile::find($id);
        //  dd($profile);
       return view('user.edit_profile', compact('profile'));
    }

    public function update(Request $request, $id){
        $profile=Profile::whereId($id)->first();
        $profile->company_address=$request->company_address;
        $profile->email=$request->email;
        $profile->website=$request->website;
        $profile->bank_name=$request->bank_name;
        $profile->account_number=$request->account_number;
        $profile->phone_no=$request->phone_no;
        $profile->feedback=$request->feedback;
        $profile->save();
        return redirect('/user/users_home');
    }


//code for uploading documents
  

    // code for users homepage
    public function index(){
        return view ('user.users_home');
    }


}
