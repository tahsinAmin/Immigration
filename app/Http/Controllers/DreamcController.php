<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dreamc;

class DreamcController extends Controller{

    public function index(){
        $dreamc = Dreamc::all();
        // $dreamc = Dreamc::orderBy('name','desc')->get();
        // $dreamc = Dreamc::where('age',34)->get();
        // $dreamc = Dreamc::latest()->get();

        return view('dreamc.index', [
            'dreamc' => $dreamc,
          ]);
    }

    public function show($id){
        $dc = Dreamc::findOrFail($id);
        return view('dreamc.show', ['dc'=> $dc]);
    }
    
    public function create(){
        return view('dreamc.create');
    }

    public function store(){
        // error_log(request('name'));
        // error_log(request('email'));
        // error_log(request('age'));

        $dc = new Dreamc();
        $dc->name = request('name');
        $dc->email = request('email');
        $dc->age = request('age');

        // error_log($pizza);
        $dc->save();

        // return redirect("/");
        return redirect("/dreamc/create")->with('mssg', 'Assessment form submitted!!');
    }
}