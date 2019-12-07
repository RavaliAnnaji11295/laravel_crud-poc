<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
    public function store(Request $request){
        // dd($request);
        $user =new User();
        $validatedata = $request->validate([    
            'name' => 'required',     
            'email' => 'required',    
            'mobile' => 'required',    
            'address' => 'required'      
        ]);       
        // dd($validatedata);             
        $user->name = $validatedata['name'];
        $user->email = $validatedata['email'];
        $user->mobile = $validatedata['mobile'];     
        $user->address = $validatedata['address'];
        $user->remember_token = $request['_token'];
        $user->save();
        return redirect('/user/userdata')->with('success','data inserted successfully');
    }
          
    public function show(){
        // $users = DB::table('users')->get();
        $users = User::all();
        return view('user/userdata', ['users' => $users]);
    }
    public function edit($id){
        $fetchall = User::all();
        $findone = $fetchall->find($id);
        // dd($findone);
       return view('user/edit', ['findone' => $findone]);
    }

    public function update(Request $request,$id){
        // dd($request);
        $validatedata = $request->validate([    
            'name' => 'required',     
            'email' => 'required',    
            'mobile' => 'required',    
            'address' => 'required'      
        ]);
        $users = User::find($id);
        // dd($finduserid);             
        $users->name = $validatedata['name'];
        $users->email = $validatedata['email'];
        $users->mobile = $validatedata['mobile'];     
        $users->address = $validatedata['address'];
        $users->save();
        return redirect('user/userdata')->with('success','Data updated successfully');
    }

    public function delete($id){
        $fetchone = User::find($id);   
        $fetchone->delete();   
        return redirect('/user/userdata')->with('success','user deleted successfully');      
    }
}
