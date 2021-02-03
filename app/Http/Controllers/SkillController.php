<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Portfolio;

class SkillController extends Controller
{
    public function index(){
      return view('skills.index');
    }

    public function store(Request $request)
    {
      $skill = new Skill();
        $skill->skill = request()->input('skill');
        $skill->percentage = request()->input('percentage');


         $done = $skill->save();
         if ($done) {
            return view('skills.index');
         }


    }

    public function show(){
      $skill = Skill::all();

      return view('portfolio.index',compact('skill'));
    }
}
