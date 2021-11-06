<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\Portfolio;
use App\Testimonial;

class StatusController extends Controller
{
    public function index()
    {
        $service = Service::All()->count();
        $portfolio = Portfolio::All()->count();
        $testimonial = Testimonial::All()->count();
        $users = User::where('email', '!=',  'antarip15@gmail.com')->select('id', 'name', 'email', 'admin')->get();
        return view('backend.status.status', compact('users', 'service', 'portfolio', 'testimonial'));
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
