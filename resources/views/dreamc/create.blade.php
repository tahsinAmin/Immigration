@extends('layouts.app')

@section('content')
<div class="wrapper create-dream">
  <div class="container" style="width:65%">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
  </div>

  <form action="{{ route('dreamc.index') }}" name="myForm" class="container" method="POST">
    @csrf
      <legend>Form Assessment</legend>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" name="age" class="form-control" id="age" placeholder="Age" required>
      </div>


      <div class="form-group mt-4">
          <h4>Education</h4>
          <div class="form-check">
            <input id="phd" name="education" type="radio" class="form-check-input" value=25 required>
            <label class="form-check-label" for="phd">PhD</label>
          </div>

          <div class="form-check">
            <input id="master" name="education" type="radio" class="form-check-input" value=23 required>
            <label class="form-check-label" for="master">Master</label>
          </div>
          <div class="form-check">
            <input id="twoormore" name="education" type="radio" class="form-check-input" value=22 required>
            <label class="form-check-label" for="twoormore">Two Or More</label>
          </div>
          <div class="form-check">
            <input id="ps3p" name="education" type="radio" class="form-check-input" value=21 required>
            <label class="form-check-label" for="ps3p">Post Secondary/ 3+yr prog</label>
          </div> 
          <div class="form-check">
            <input id="ps2" name="education" type="radio" class="form-check-input" value=19 required>
            <label class="form-check-label" for="ps2">Post Secondary/ 2yr prog</label>
          </div>
          <div class="form-check">
            <input id="ps1" name="education" type="radio" class="form-check-input" value=15 required>
            <label class="form-check-label" for="ps1">Post Secondary/ 1yr prog</label>
          </div>
          <div class="form-check">
            <input id="highschool" name="education" type="radio" class="form-check-input" value=5 required>
            <label class="form-check-label" for="highschool">High School</label>
          </div>            
      </div>

      <div class="form-group mt-4">
          <h4>Work Experience</h4>
          <div class="form-check">
            <input id="zero" name="workexp" type="radio" class="form-check-input" value=0 checked required>
            <label class="form-check-label" for="zero">None</label>
          </div>
          <div class="form-check">
            <input id="one" name="workexp" type="radio" class="form-check-input" value=9 required>
            <label class="form-check-label" for="one">1 year</label>
          </div>
          <div class="form-check">
            <input id="twothree" name="workexp" type="radio" class="form-check-input" value=11 required>
            <label class="form-check-label" for="twothree">2-3 years</label>
          </div>
          <div class="form-check">
            <input id="fourfive" name="workexp" type="radio" class="form-check-input" value=13 required>
            <label class="form-check-label" for="fourfive">4-5 years</label>
          </div>
          <div class="form-check">
            <input id="six" name="workexp" type="radio" class="form-check-input" value=15 required>
            <label class="form-check-label" for="six">6 or more years</label>
          </div>                
      </div>

      <hr class="my-4">
      <h3>Language</h3>
      <h4>
        Exam Style
        <select class="form-select" id="examstyle" name="examstyle" onchange="examFormat();" required>
            <option value="">Choose...</option>
            <option value="celpip">CELPIP</option>
            <option value="ielts">IELTS</option>
            <!-- <option value="tef">TEF</option> -->
        </select>
      </h4>

      <div id="celpipSwitch" style="display: none">
        <h4>
          First Official Language
          <select class="form-select" id="cFirstLang" name="cFirstLang" onchange="show1();" required>
              <option value="n">Choose...</option>
              <option value="eng">English</option>
              <option value="fr">French</option>
          </select>
        </h4>
        <div class="row g-3">

          <div class="col-md-3">
            <label for="cSpeaking1" class="form-label">Speaking</label>
            <select class="form-select" id="cSpeaking1" name="cSpeaking1" required>
              <option value="0">Choose...</option>
              <option value=10>10</option>
              <option value=9 >9</option>
              <option value=8 >8</option>
              <option value=7 >7</option>
              <option value=6 >6</option>
              <option value=5 >5</option>
              <option value=4 >4</option>       
            </select>
          </div>

          <div class="col-md-3">
            <label for="cListening1" class="form-label">Listening</label>
              <select class="form-select" id="cListening1" name="cListening1" required>
              <option value="0">Choose...</option>
              <option value=10>10</option>
              <option value=9 >9</option>
              <option value=8 >8</option>
              <option value=7 >7</option>
              <option value=6 >6</option>
              <option value=5 >5</option>
              <option value=4 >4</option>           
            </select>
          </div> 

          <div class="col-md-3">
            <label for="cReading1" class="form-label">Reading</label>
            <select class="form-select" id="cReading1" name="cReading1" required>
              <option value="0">Choose...</option>
              <option value=10>10</option>
              <option value=9 >9</option>
              <option value=8 >8</option>
              <option value=7 >7</option>
              <option value=6 >6</option>
              <option value=5 >5</option>
              <option value=4 >4</option>           
            </select>
          </div>

          <div class="col-md-3">
            <label for="cWriting1" class="form-label">Writing</label>
            <select class="form-select" id="cWriting1" name="cWriting1" required>
              <option value="0">Choose...</option>
              <option value=10>10</option>
              <option value=9 >9</option>
              <option value=8 >8</option>
              <option value=7 >7</option>
              <option value=6 >6</option>
              <option value=5 >5</option>
              <option value=4 >4</option>              
            </select>
          </div>
        </div>

        <h4 class="my-4">
          Second Official Language
          <span id="cLangChange"></span>
        </h4>
        <div class="row g-3">

          <div class="col-md-3">
            <label for="cSpeaking2" class="form-label">Speaking</label>
            <select class="form-select" id="cSpeaking2" name="cSpeaking2" required>
              <option value="0">Choose...</option>
              <option value=10>10</option>
              <option value=9 >9</option>
              <option value=8 >8</option>
              <option value=7 >7</option>
              <option value=6 >6</option>
              <option value=5 >5</option>
              <option value=4 >4</option>            
            </select>
          </div>

          <div class="col-md-3">
            <label for="cListening2" class="form-label">Listening</label>
              <select class="form-select" id="cListening2" name="cListening2" required>
                <option value="0">Choose...</option>
                <option value=10>10</option>
                <option value=9 >9</option>
                <option value=8 >8</option>
                <option value=7 >7</option>
                <option value=6 >6</option>
                <option value=5 >5</option>
                <option value=4 >4</option>         
              </select>
          </div> 

          <div class="col-md-3">
            <label for="cReading2" class="form-label">Reading</label>
            <select class="form-select" id="cReading2" name="cReading2" required>
                <option value="0">Choose...</option>
                <option value=10>10</option>
                <option value=9 >9</option>
                <option value=8 >8</option>
                <option value=7 >7</option>
                <option value=6 >6</option>
                <option value=5 >5</option>
                <option value=4 >4</option>  
            </select>
          </div>

          <div class="col-md-3">
            <label for="cWriting2" class="form-label">Writing</label>
            <select class="form-select" id="cWriting2" name="cWriting2" required>
                <option value="0">Choose...</option>
                <option value=10>10</option>
                <option value=9 >9</option>
                <option value=8 >8</option>
                <option value=7 >7</option>
                <option value=6 >6</option>
                <option value=5 >5</option>
                <option value=4 >4</option>         
            </select>
          </div>
        </div>
      </div>

      <div id="ieltsSwitch" style="display: none">
        <h4>
          First Official Language
          <select class="form-select" id="iFirstLang" name="iFirstLang" onchange="show2();">
              <option value="n">Choose...</option>
                <option value="eng">English</option>
                <option value="fr">French</option>
          </select>
        </h4>
        <div class="row g-3">

          <div class="col-md-3">
            <label for="iSpeaking1" class="form-label">Speaking</label>
            <select class="form-select" id="iSpeaking1" name="iSpeaking1" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>

          <div class="col-md-3">
            <label for="iListening1" class="form-label">Listening</label>
              <select class="form-select" id="iListening1" name="iListening1" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div> 

          <div class="col-md-3">
            <label for="iReading1" class="form-label">Reading</label>
            <select class="form-select" id="iReading1" name="iReading1" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>

          <div class="col-md-3">
            <label for="iWriting1" class="form-label">Writing</label>
            <select class="form-select" id="iWriting1" name="iWriting1" required>
            <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>
        </div>

        <h4 class="my-4">
          Second Official Language
          <span id="iLangChange"></span>
        </h4>
        <div class="row g-3">
          <div class="col-md-3">
            <label for="iSpeaking2" class="form-label">Speaking</label>
            <select class="form-select" id="iSpeaking2" name="iSpeaking2" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>

          <div class="col-md-3">
            <label for="iListening2" class="form-label">Listening</label>
              <select class="form-select" id="iListening2" name="iListening2" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div> 

          <div class="col-md-3">
            <label for="iReading2" class="form-label">Reading</label>
            <select class="form-select" id="iReading2" name="iReading2" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>

          <div class="col-md-3">
            <label for="iWriting2" class="form-label">Writing</label>
            <select class="form-select" id="iWriting2" name="iWriting2" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>
        </div>
      </div>

      <!-- <div id="tefSwitch" style="display: none">
        <h4>
          First Official Language
          <select class="form-select" id="tFirstLang" name="tFirstLang" onchange="show3();">
              <option value="n">Choose...</option>
                <option value="eng">English</option>
                <option value="fr">French</option>
          </select>
        </h4>
        <div class="row g-3">

          <div class="col-md-3">
            <label for="iSpeaking1" class="form-label">Speaking</label>
            <select class="form-select" id="iSpeaking1" name="iSpeaking1" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>

          <div class="col-md-3">
            <label for="iListening1" class="form-label">Listening</label>
              <select class="form-select" id="iListening1" name="iListening1" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div> 

          <div class="col-md-3">
            <label for="iReading1" class="form-label">Reading</label>
            <select class="form-select" id="iReading1" name="iReading1" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>

          <div class="col-md-3">
            <label for="iWriting1" class="form-label">Writing</label>
            <select class="form-select" id="iWriting1" name="iWriting1" required>
            <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>
        </div>

        <h4 class="my-4">
          Second Official Language
          <span id="iLangChange"></span>
        </h4>
        <div class="row g-3">
          <div class="col-md-3">
            <label for="iSpeaking2" class="form-label">Speaking</label>
            <select class="form-select" id="iSpeaking2" name="iSpeaking2" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>

          <div class="col-md-3">
            <label for="iListening2" class="form-label">Listening</label>
              <select class="form-select" id="iListening2" name="iListening2" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div> 

          <div class="col-md-3">
            <label for="iReading2" class="form-label">Reading</label>
            <select class="form-select" id="iReading2" name="iReading2" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>

          <div class="col-md-3">
            <label for="iWriting2" class="form-label">Writing</label>
            <select class="form-select" id="iWriting2" name="iWriting2" required>
              <option value="0">Choose...</option>
              <option value=9 >9</option>
              <option value=8.5 >8.5</option>
              <option value=8 >8</option>
              <option value=7.5 >7.5</option>
              <option value=7 >7</option>
              <option value=6.5 >6.5</option>
              <option value=6 >6</option>
              <option value=5.5 >5.5</option>
              <option value=5 >5</option>
              <option value=4.5 >4.5</option>
              <option value=4 >4</option>
              <option value=3.5 >3.5</option>
              <option value=3 >3</option>
              <option value=2.5 >2.5</option>
              <option value=2 >2</option>           
            </select>
          </div>
        </div>
      </div> -->

      <hr class="my-4">

      <div class="form-group mt-4">
        <h4>Adaptability</h4>
        <input id="married" onclick="spouseRelatedInfo();" type=checkbox>
        <label class="form-check-label" for="married">
          Are you married?
        </label>
        <div id="spouseRelated" style="display: none;">
          <div class="form-check">             
            <input  class="form-check-input" type=checkbox name=ckb value=5 onclick='chkcontrol(1)';>
          <label class="form-check-label">
            Your spouse or partner’s language level
          </label>
          </div>
          <div class="form-check">             
            <input  class="form-check-input" type=checkbox name=ckb value=5 onclick='chkcontrol(2)';>
          <label class="form-check-label">
            Your spouse or partner’s past studies in Canada
          </label>
          </div>
          <div class="form-check">             
            <input  class="form-check-input" type=checkbox name=ckb value=5 onclick='chkcontrol(3)';>
            <label class="form-check-label">
              Your spouse or common-law partner’s past work in Canada
            </label>
          </div>
        </div>
        <div class="form-check">              
          <input  class="form-check-input" type=checkbox name=ckb value=10 onclick='chkcontrol(4)';>
        <label class="form-check-label">
          Your past studies in Canada
        </label>
          </div>
        <div class="form-check">             
          <input  class="form-check-input" type=checkbox name=ckb value=5 onclick='chkcontrol(5)';>
        <label class="form-check-label">
          Your past work in Canada
        </label>
          </div>
        <div class="form-check">          
          <input  class="form-check-input" type=checkbox name=ckb value=5 onclick='chkcontrol(6)';>
        <label class="form-check-label">
          Arranged employment in Canada
        </label>
          </div>
        <div class="form-check">   
          <input  class="form-check-input" type=checkbox name=ckb value=5 onclick='chkcontrol(7)';
          <label class="form-check-label">
            Relatives in Canada
          </label>
        </div>  
      </div> 

      <hr class="my-4">

      <!-- <input type="submit" name="submit" class="btn btn-primary mt-2" >  -->

      <button class="btn btn-primary mt-2" id="submitBtn" name="submit" type="submit">
        Submit
      </button>



  </form>

</div>
<script>
    function examFormat(){
      var examstyle = document.myForm.examstyle.value;
      var celpipSwitch = document.getElementById("celpipSwitch");
      var ieltsSwitch = document.getElementById("ieltsSwitch");
      // var tefSwitch = document.getElementById("tefSwitch");

      if(examstyle == "celpip"){
        console.log("CELPIP");
        celpipSwitch.style.display = "block";
        ieltsSwitch.style.display = "none";
        // tefSwitch.style.display = "none";
      }else if(examstyle == "ielts"){ 
        console.log("IELTS");
        ieltsSwitch.style.display = "block";
        celpipSwitch.style.display = "none";
        // tefSwitch.style.display = "none";
      }else if(examstyle == "tef"){ 
        celpipSwitch.style.display = "none";
        ieltsSwitch.style.display = "none";
        // tefSwitch.style.display = "block";
      }else{
        celpipSwitch.style.display = "none";
        ieltsSwitch.style.display = "none";
        // tefSwitch.style.display = "none";
      }
    }

    function show1(){
        var cF= document.myForm.cFirstLang.value;
        console.log(cF);
        var cS = document.getElementById("cLangChange");
        if(cF == "eng"){
          cS.innerHTML = "(French)";
        }else if (cF == "fr"){
          cS.innerHTML = "(English)";
        }else{
          cS.innerHTML = "";
        }
    }

    function show2(){
        var iF= document.myForm.iFirstLang.value;
        console.log(iF);
        var iS = document.getElementById("iLangChange");
        if(iF == "eng"){
          iS.innerHTML = "(French)";
        }else if (iF == "fr"){
          iS.innerHTML = "(English)";
        }else{
          iS.innerHTML = "";
        }
    }

// Adaptability section
    function spouseRelatedInfo(){
      console.log("Hello");
      var spouseRelated =  document.getElementById("spouseRelated");
      spouseRelated.style.display = (spouseRelated.style.display == "none") ? "block": "none";
    }

    function chkcontrol(j) {
      var sum=0;
      for(var i=0; i < document.myForm.ckb.length; i++){
      
        if(document.myForm.ckb[i].checked){
          sum = sum + parseInt(document.myForm.ckb[i].value);
        }
        
        if(sum >10){
          sum = sum - parseInt(document.myForm.ckb[j].value);
          // document.form1.ckb[j].checked = false ;
          for(var i=0; i < document.myForm.ckb.length; i++){
            document.myForm.ckb[i].disabled= true;
          }
          alert("It seems you have reached beyond the maximum points in the Adaptibility Section") 
        }
      }
    }


</script>

@endsection