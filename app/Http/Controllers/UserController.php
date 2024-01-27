<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        $usergroup = UserGroup::all();
        if (auth()->user()->can("view_user")) {
            return view('user.user', compact('user', 'usergroup'));
        }
        return abort(403, 'Unauthorized Page');
    }

    public function create(){
        $user = User::all();
        if(auth()->user()->can("view_user")){
            return view('user.create', compact('user'));
        }

        return abort(403, 'Unauthorized Page');
    }

    public function store(Request $request){
        $validated = Validator::make($request->all(),[
            'name' => 'required | max:30',
            'username' => 'required | max:30',
            'email' => 'required | max:30',
            'password' => 'required | max:30',
            'phone_number' => 'required | max:16',
        ],[
            'name.required' => 'Nama harus diisi',
            'name.max' => 'Nama maksimal 30 huruf',
            'username' => 'Username harus diisi',
            'username.max' => 'Username maksimal 30 huruf',
            'email.required' => 'Email harus diisi',
            'email.max' => 'Email maksimal 30 huruf',
            'password.required' => 'Password harus diisi',
            'password.max' => 'Password maksimal 30 huruf',
            'phone_number.required' => 'Nomor telepon harus diisi',
            'phone_number.max' => 'Nomor telepon maksimal 16 angka',

        ]);

        if($validated->fails()){
            return redirect()->back()->withErrors($validated->errors());
        }

        $request = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
            'group_id' => 2,
        ]);

        return redirect()->route('user');
    }

    public function edit($id){
        $user = User::find($id);
        if (auth()->user()->can("view_user")) {
            return view('user.update', compact('user'));
        }
        return abort(403, 'Unauthorized Page');
    }

    public function update(Request $request){
        $validated = Validator::make($request->all(),[
            'name' => 'required | max:30',
            'username' => 'required | max:30',
            'email' => 'required | max:30',
            'phone_number' => 'required | max:16',
        ],
        [
            'name.required' => 'Nama harus diisi',
            'name.max' => 'Nama maksimal 30 huruf',
            'username' => 'Username harus diisi',
            'username.max' => 'Username maksimal 30 huruf',
            'email.required' => 'Email harus diisi',
            'email.max' => 'Email maksimal 30 huruf',
            'phone_number.required' => 'Nomor telepon harus diisi',
            'phone_number.max' => 'Nomor telepon maksimal 16 angka',
        ]);

        if($validated->fails()){
            return redirect()->back()->withErrors($validated->errors());
        }

        $user = User::find($request->id);
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('user');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user');
    }
}
