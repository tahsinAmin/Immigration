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

  <form action="{{ route('dreamc.index') }}" class="container" method="POST">
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


      <hr class="my-4">
      <h4>Language</h4>
      <h5>First Official Language</h5>
      <div class="row g-3">
        <div class="col-md-3">
          <label for="speaking1" class="form-label">Speaking</label>
          <select class="form-select" id="speaking1" name="speaking1" required>
            <option value="">Choose...</option>
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
          <label for="listening1" class="form-label">Listening</label>
            <select class="form-select" id="listening1" name="listening1" required>
            <option value="">Choose...</option>
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
          <label for="reading1" class="form-label">Reading</label>
          <select class="form-select" id="reading1" name="reading1" required>
            <option value="">Choose...</option>
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
          <label for="writing1" class="form-label">Writing</label>
          <select class="form-select" id="writing1" name="writing1" required>
          <option value="">Choose...</option>
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

      <h5>Second Official Language</h5>
      <div class="row g-3">
        <div class="col-md-3">
          <label for="speaking2" class="form-label">Speaking</label>
          <select class="form-select" id="speaking2" name="speaking2" required>
            <option value="">Choose...</option>
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
          <label for="listening2" class="form-label">Listening</label>
            <select class="form-select" id="listening2" name="listening2" required>
            <option value="">Choose...</option>
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
          <label for="reading2" class="form-label">Reading</label>
          <select class="form-select" id="reading2" name="reading2" required>
            <option value="">Choose...</option>
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
          <label for="writing2" class="form-label">Writing</label>
          <select class="form-select" id="writing2" name="writing2" required>
          <option value="">Choose...</option>
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

      <hr class="my-4">



      <!-- <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button> -->
      <input type="submit" name="submit" class="btn btn-primary mt-2" value="Submit"> 
  </form>

</div>

@endsection

          <!-- <hr class="my-4"> -->

          <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div> -->