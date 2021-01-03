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

        $total = $a + request('workexp');

        $email_data = array(
            'name' => request('name'),
            'age' => $a,
            'workexp' => request('workexp'),
            'total' => $total
        );

        Mail::to(request('email'))->send(new FirstEmail($email_data));

        error_log(request('speaking'));
        error_log(request('listening'));
        error_log(request('reading'));
        error_log(request('writing'));

        $speaking = request('speaking');
        $listening = request('listening');
        $reading = request('reading');
        $writing = request('writing');

        if($speaking>=7.0 &&  $listening>=8.0 && $reading>=7.0 && $writing>=7.0){
            error_log("CLB9 or above.");
        } else if($speaking>=6.5 &&  $listening>=7.5 && $reading>=6.5 && $writing>=6.5){
            error_log("CLB8.");
        } else if($speaking>=6.0 &&  $listening>=6.0 && $reading>=6.0 && $writing>=6.0){
            error_log("CLB7.");
        }else{
            error_log("Not eligible to apply");
        }
        $dc->save();

        // return redirect("/");
        return redirect("/dreamc/create")->with('success', 'Assessment form submitted!!');
    }
}