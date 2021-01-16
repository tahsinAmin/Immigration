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


        $speaking = request('iSpeaking1');
        $listening = request('iListening1');
        $reading = request('iReading1');
        $writing = request('iWriting1');
        $clb = 0;

        if($speaking>=7.0 &&  $listening>=8.0 && $reading>=7.0 && $writing>=7.0){
            $clb = 24;
        } else if($speaking>=6.5 &&  $listening>=7.5 && $reading>=6.5 && $writing>=6.5){
            $clb = 20;
        } else if($speaking>=6.0 &&  $listening>=6.0 && $reading>=6.0 && $writing>=6.0){
            $clb = 16;
        } else if($speaking>=5.5 &&  $listening>=5.5 && $reading>=5.0 && $writing>=5.5){

        } else if($speaking>=5.0 &&  $listening>=5.0 && $reading>=4.0 && $writing>=5.0){

        } else{
            error_log("Not eligible to apply");
        }

        $speaking = request('iSpeaking2');
        $listening = request('iListening2');
        $reading = request('iReading2');
        $writing = request('iWriting2');
        $clb2 = 4;
        if($speaking>=7.0 &&  $listening>=8.0 && $reading>=7.0 && $writing>=7.0){

        } else if($speaking>=6.5 &&  $listening>=7.5 && $reading>=6.5 && $writing>=6.5){

        } else if($speaking>=6.0 &&  $listening>=6.0 && $reading>=6.0 && $writing>=6.0){

        } else if($speaking>=5.5 &&  $listening>=5.5 && $reading>=5.0 && $writing>=5.5){

        } else if($speaking>=5.0 &&  $listening>=5.0 && $reading>=4.0 && $writing>=5.0){
            
        } else{
            $clb2 = 0;
        }

        $clb+=$clb2;

        $total = $a + $clb + request('workexp') + request('education');

        $frstL = request('firstlang');
        $secondL = ($frstL == "eng") ? "fr" : "eng";
        error_log($secondL);

        $examstyle =  request('examstyle');
        error_log($examstyle);

        $email_data = array(
            'name' => request('name'),
            'age' => $a,
            'workexp' => request('workexp'),
            'education' => request('education'),
            'clb' => $clb,
            'total' => $total
        );

        Mail::to(request('email'))->send(new FirstEmail($email_data));
        
        $dc->save();

        // return redirect("/");
        return redirect("/dreamc/create")->with('success', 'Assessment form submitted!!');
    }
}