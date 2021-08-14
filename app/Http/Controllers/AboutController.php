<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeamMember;
use App\About;

class AboutController extends Controller
{
    public function index()    {
        $info = About::orderBy('id', 'DESC')->first();
        
        $team_members = TeamMember::all();

        return view('about')->with('team_members', $team_members)->with('info', $info);
    }

    public function contact(){
        $info = About::orderBy('id', 'DESC')->first();

        return view('contact')->with('info', $info);
    }
}


