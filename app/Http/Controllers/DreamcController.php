<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dreamc;

class DreamcController extends Controller
{
    public function index(){

        $dreamc = Dreamc::all();
        // $dreamc = Dreamc::orderBy('name','desc')->get();
        // $dreamc = Dreamc::where('age',34)->get();
        // $dreamc = Dreamc::latest()->get();

        return view('dreamc', [
            'dreamc' => $dreamc,
          ]);
    }

    public function show($id){
        return view('details', ['id'=> $id]);
    }
}
