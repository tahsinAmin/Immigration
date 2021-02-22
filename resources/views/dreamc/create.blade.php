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

  <form action="{{ route('dreamc.index') }}" name="myForm" class="container col-lg-6" method="POST">
    @csrf
      <legend class="text-center py-4">Form Assessment</legend>
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
          <h4>Highest Level of Education You've Completed</h4>
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
        </select>
      </h4>

      <div id="celpipSwitch" style="display: none">
        <h4>First Official Language
          <select class="form-select" id="cFirstLang" name="cFirstLang" onchange="show1();" required>
              <option value="n">Choose...</option>
              <option value="eng">English</option>
              <option value="fr">French</option>
          </select>
        </h4>
        <div id="ifEn" style="display: none">
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
            <span id="cLangChange1"></span>
          </h4>
          <div class="row g-3">
            <div class="col-md-3">
              <label for="cSpeaking2" class="form-label">Speaking</label>
              <input type="number" name="cSpeaking2" class="form-control" id="cSpeaking2" value=0 placeholder="Enter a number" required>
            </div>
            <div class="col-md-3">
              <label for="cListening2" class="form-label">Listening</label>
              <input type="number" name="cListening2" class="form-control" id="cListening2" value=0 placeholder="Enter a number" required>
            </div>
            <div class="col-md-3">
              <label for="cReading2" class="form-label">Reading</label>
              <input type="number" name="cReading2" class="form-control" id="cReading2" value=0 placeholder="Enter a number" required>
            </div>
            <div class="col-md-3">
              <label for="cWriting2" class="form-label">Writing</label>
              <input type="number" name="cWriting2" class="form-control" id="cWriting2" value=0 placeholder="Enter a number" required>
            </div>
          </div>
        </div>

        <div id="ifFr" style="display: none">
          <div class="row g-3">
            <div class="col-md-3">
              <label for="cSpeaking3" class="form-label">Speaking</label>
              <input type="number" name="cSpeaking3" class="form-control" id="cSpeaking3" value=0 placeholder="Enter a number" required>
            </div>
            <div class="col-md-3">
              <label for="cListening3" class="form-label">Listening</label>
              <input type="number" name="cListening3" class="form-control" id="cListening3" value=0 placeholder="Enter a number" required>
            </div>
            <div class="col-md-3">
              <label for="cReading3" class="form-label">Reading</label>
              <input type="number" name="cReading3" class="form-control" id="cReading3" value=0 placeholder="Enter a number" required>
            </div>
            <div class="col-md-3">
              <label for="cWriting3" class="form-label">Writing</label>
              <input type="number" name="cWriting3" class="form-control" id="cWriting3" value=0 placeholder="Enter a number" required>
            </div>
          </div>
          <h4 class="my-4">
            Second Official Language
            <span id="cLangChange2"></span>
          </h4>
          <div class="row g-3">
            <div class="col-md-3">
              <label for="cSpeaking4" class="form-label">Speaking</label>
              <select class="form-select" id="cSpeaking4" name="cSpeaking4" required>
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
              <label for="cListening4" class="form-label">Listening</label>
                <select class="form-select" id="cListening4" name="cListening4" required>
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
              <label for="cReading4" class="form-label">Reading</label>
              <select class="form-select" id="cReading4" name="cReading4" required>
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
              <label for="cWriting4" class="form-label">Writing</label>
              <select class="form-select" id="cWriting4" name="cWriting4" required>
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

      <div id="tefSwitch" style="display: none">
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
            <label for="tSpeaking1" class="form-label">Speaking</label>
            <input type="number" name="tSpeaking1" class="form-control" id="tSpeaking1" value=0 placeholder="Enter a number" required>
          </div>

          <div class="col-md-3">
            <label for="tListening1" class="form-label">Listening</label>
            <input type="number" name="tListening1" class="form-control" id="tListening1" value=0 placeholder="Enter a number" required>
          </div>

          <div class="col-md-3">
            <label for="tReading1" class="form-label">Reading</label>
            <input type="number" name="tReading1" class="form-control" id="tReading1" value=0 placeholder="Enter a number" required>
          </div>

          <div class="col-md-3">
            <label for="tWriting1" class="form-label">Writing</label>
            <input type="number" name="tWriting1" class="form-control" id="tWriting1" value=0 placeholder="Enter a number" required>
          </div>

        </div>

        <h4 class="my-4">
          Second Official Language
          <span id="tLangChange"></span>
        </h4>

        <div class="row g-3">
          <div class="col-md-3">
            <label for="tSpeaking2" class="form-label">Speaking</label>
            <input type="number" name="tSpeaking2" class="form-control" id="tSpeaking2" value=0 placeholder="Enter a number" required>
          </div>
          <div class="col-md-3">
            <label for="tListening2" class="form-label">Listening</label>
            <input type="number" name="tListening2" class="form-control" id="tListening2" value=0 placeholder="Enter a number" required>
          </div>
          <div class="col-md-3">
            <label for="tReading2" class="form-label">Reading</label>
            <input type="number" name="tReading2" class="form-control" id="tReading2" value=0 placeholder="Enter a number" required>
          </div>
          <div class="col-md-3">
            <label for="tWriting2" class="form-label">Writing</label>
            <input type="number" name="tWriting2" class="form-control" id="tWriting2" value=0 placeholder="Enter a number" required>
          </div>
        </div>

      </div>

      <hr class="my-4">

      <div class="form-group mt-4"><h4>Adaptability</h4><input id="married" onclick="spouseRelatedInfo();" type=checkbox>
        <label class="form-check-label" for="married">
          Are you married?
        </label>
        <div id="spouseRelated" style="display: none;">
          <div class="form-check">             
            <input  class="form-check-input" type=checkbox id="check-1" name="ckb[]" value=5 onclick='chkcontrol(1)';>
          <label class="form-check-label">
            Your spouse or partner’s language level
          </label>
          </div>
          <div class="form-check">             
            <input  class="form-check-input" type=checkbox id="check-2" name="ckb[]" value=5 onclick='chkcontrol(2)';>
          <label class="form-check-label">
            Your spouse or partner’s past studies in Canada
          </label>
          </div>
          <div class="form-check">             
            <input  class="form-check-input" type=checkbox id="check-3" name="ckb[]" value=5 onclick='chkcontrol(3)';>
            <label class="form-check-label">
              Your spouse or common-law partner’s past work in Canada
            </label>
          </div>
        </div>
        <div class="form-check">              
          <input  class="form-check-input" type=checkbox id="check-4" name="ckb[]" value=10 onclick='chkcontrol(4)';>
          <label class="form-check-label">
            Your past studies in Canada
          </label>
        </div>
        <div class="form-check">             
          <input  class="form-check-input" type=checkbox id="check-5" name="ckb[]" value=5 onclick='chkcontrol(5)';>
        <label class="form-check-label">
          Your past work in Canada
        </label>
          </div>
        <div class="form-check">          
          <input  class="form-check-input" type=checkbox id="check-6" name="ckb[]" value=5 onclick='chkcontrol(6)';>
          <label class="form-check-label">
            Arranged employment in Canada
          </label>
        </div>
        <div class="form-check">   
          <input  class="form-check-input" type=checkbox id="check-7" name="ckb[]" value=5 onclick='chkcontrol(7)';>
          <label class="form-check-label">
            Relatives in Canada
          </label>
        </div>
        <input type="hidden" id="sumAdaptability" name="sumAdaptability" value="" />
      </div>

      <hr class="my-4">
      <div class="form-group mt-4"><h4>Arranged employment in Canada</h4>

      <input id="arrangedEmployment" name = "arrangedEmployment"
       type=checkbox data-toggle="tooltip" data-placement="top"
       title="You must get the job offer before you apply to come to Canada as a Federal Skilled Worker."
       value=10>

        <label class="form-check-label" for="arrangedEmployment">
        you have a job offer of at least 1 year from a Canadian employer.
        </label>
      </div>
      <input type="submit" name="submit" class="btn btn-primary mt-2" > 
  </form>
</div>


@endsection