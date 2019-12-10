<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //  @Function Name:store.
    //  @Purpose:using store function to store the user data.
    //  @Input Parameters:post request parametes
    //  @Output:inserting the new user information.
    public function store(Request $request){
        $user =new User();
        $validatedata = $request->validate([    
            'name' => 'required',     
            'email' => 'required',    
            'mobile' => 'required',    
            'address' => 'required'      
        ]);       
        $user->name = $validatedata['name'];
        $user->email = $validatedata['email'];
        $user->mobile = $validatedata['mobile'];     
        $user->address = $validatedata['address'];
        $user->save();
        return redirect('/user/userdata')->with('success','User Inserted successfully');
    }
    
    //  @Function Name:show.
    //  @Purpose:fetching all the users data.
    //  @Input Parameters:
    //  @Output:
    public function show(){
    // Fetching the all users
        $users = User::all();
        return view('user/userdata', ['users' => $users]);
    }

    //  @Function Name:edit.
    //  @Purpose:By passing id of the user fetching the user information.
    //  @Input Parameters:passing id 
    //  @Output:showing the single user data
    public function edit($id){
        $user = User::find($id);
       return view('user/edit', ['user' => $user]);
    }

    //  @Function Name:update.
    //  @Purpose:Updating the user information.
    //  @Input Parameters:passing user id
    //  @Output:update the user information into the database.
    public function update(Request $request,$id){
        $validatedata = $request->validate([    
            'name' => 'required',     
            'email' => 'required',    
            'mobile' => 'required',    
            'address' => 'required'      
        ]);
        $user = User::find($id);
        $user->name = $validatedata['name'];
        $user->email = $validatedata['email'];
        $user->mobile = $validatedata['mobile'];     
        $user->address = $validatedata['address'];
        $user->save();
        return redirect('user/userdata')->with('success','User Updated successfully');
    }

    //  @Function Name:delete.
    //  @Purpose:deleting the user information from the database.
    //  @Input Parameters:passing user id.
    //  @Output:deletes the user information from the database.
    public function delete($id){
        $user = User::find($id);   
        $user->delete();   
        return redirect('/user/userdata')->with('success','User Deleted successfully');      
    }
}
