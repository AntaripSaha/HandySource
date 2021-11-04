<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StatusController extends Controller
{
    public function index()
    {
        $users = User::where('email', '!=',  'antarip15@gmail.com')->select('id', 'name', 'email', 'admin')->get();
        return view('backend.status', compact('users'));
    }

    public function update(Request $request)
    {
        $data = User::Find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->admin = $request->status;
        $data->save();
        return redirect()->back()->with('success', ' User Information Updated');
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'User Deleted');
    }
}
