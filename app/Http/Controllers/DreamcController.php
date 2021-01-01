<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dreamc;

use Illuminate\Support\Facades\Mail;
use App\Mail\FirstEmail;

class DreamcController extends Controller{



    public function index(){
        $dreamc = Dreamc::all();

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
        $age = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,
        12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,11,10,9,8,7,6,5,4,3,2,1];

        $dc = new Dreamc();
        $dc->name = request('name');
        $dc->email = request('email');
        $dc->age = request('age');
        $dc->workexp = request('workexp');

        $value = request('age');
        $a= ($value < 47)? $age[$value] :0; 

        $email_data = array(
            'name' => request('name'),
            'age' => $a,
            'workexp' => request('workexp'),
        );

        Mail::to(request('email'))->send(new FirstEmail($email_data));

        error_log(request('speaking'));
        error_log(request('listening'));
        error_log(request('reading'));
        error_log(request('writing'));
        $dc->save();

        // return redirect("/");
        return redirect("/dreamc/create")->with('success', 'Assessment form submitted!!');
    }
}