<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
      return view('admin.dashboard');
}

public function login(Request $request){
  if($request->isMethod('post')){
    $data = $request->input();
    if(Auth::attempt(['email'=>$data['username'],'password'=>$data['password']])){
      return 123;
    }
  }
  return view('admin.login');
}

public function addskills()
{
  return view('admin.add-skills');
}
}
