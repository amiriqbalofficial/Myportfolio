<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Skill;
use App\Testimonial;
use App\Service;

use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{



    public function index()
    {
          $skill = Skill::all();
          $portfolio = Portfolio::all();
      return view('portfolio.index',compact('portfolio','skill'));
    }

    public function mycv(){
        return view('cv.cv');
    }


    public function create(Request $request){
        $name= request('name');
        $email= request('email');
        $message= request('message');

        $validator = Validator::make($request->all(), [
          'name' => 'required|min:3',
          'email' => 'required|min:3',
          'message' => 'required|min:3'
      ]);

      if ($validator->fails()) {
          return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
      }

         $portfolio = new Portfolio ();
         $portfolio-> name=$name;
         $portfolio-> email=$email;
         $portfolio-> message=$message;
          $done = $portfolio-> save();
          if ($done) {
            return redirect('portfolio')->withToastSuccess('Message sent successfully!');

          }



    }


}
