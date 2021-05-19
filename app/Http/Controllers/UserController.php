<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::get();
        return view('admin.users.index',compact('users'));

    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string',
            'department_id'=>'required',
            'role_id'=>'required',
            'image'=>'mimes:jpeg,jpg,png',
            'start_from'=>'required',
            'designation'=>'required'
        ]);

        $data = $request->all();
        if($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('profile'),$image);
        }else{
            $image = 'avatar2.png';
        }
        $data['name'] = $request->firstname.' '.$request->lastname;
        $data['image']=$image;
        $data['password']= bcrypt($request->password);
        User::create($data);
        return redirect()->back()->with('message','User created Successfully');

    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
    }


    public function update(Request $request)
    {


         $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'department_id'=>'required',
            'role_id'=>'required',
            'image'=>'mimes:jpeg,jpg,png',
            'start_from'=>'required',
            'designation'=>'required'
        ]);
        $data = $request->all();
        $user = User::find($request->id);
        if($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('profile'),$image);
        }else{
            $image = $user->image;
        }
        if($request->password){
            $password = $request->password;
        }else{
            $password = $user->password;
        }
        $data['image']=$image;
        $data['password']= bcrypt($password);
        $user->update($data);
        return redirect('users')->with('message','User updated Successfully');


    }

    public function destroy($id)
    {
        $delete = User::find($id);


            User::find($id)->delete();
            return redirect()->back()->with('message','User deleted Successfully');



    }
}
