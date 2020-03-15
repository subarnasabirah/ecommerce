<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\User;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'List of Users';
        $data['users'] = User::paginate(2);
        $data['serial'] = managePaginationSerial($data['users']);
        return view('admin.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data['title'] = "Create New User";
       return view('admin.user.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',


        ]);
        $data = $request->all();
        if($request->image){
            $data['image'] = $this->fileUpload($request->image);
        }
        User::create($data);
        session()->flash('message','User Created Successfully');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $data['title'] = "User Details";
        $data['user'] = $user;
        return view('admin.user.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data['title'] = "Edit User";
        $data['user'] = $user;
        return view('admin.user.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'phone' => 'required|unique:users,phone,'.$user->id,


        ]);
        $data = $request->all();
        if($request->image){
            $data['image'] = $this->fileUpload($request->image);
            if($user->image && file_exists($user->image)){
                unlink($user->image);
            }

        }
        $user->update($data);
        session()->flash('message','User Updated Successfully');
        return redirect()->route('user.index');
    }


    private function fileUpload($img)
    {
        $path = 'images/users';
        $file_name = time().rand(00000,99999).'.'.$img->getClientOriginalExtension();
        $img->move($path, $file_name);
        $fullPath = $path. '/' .$file_name;
        return $fullPath;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->image && file_exists($user->image)){
            unlink($user->image);
        }
        $user->delete();
        session()->flash('message','User Deleted Successfully');
        return redirect()->route('user.index');
    }
}
