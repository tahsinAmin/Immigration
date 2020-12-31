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
          <h5>Work Experience</h5>
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

      <!-- <hr class="my-4">
      <h4>Education</h4>
      <div class="row g-3">
        <div class="col-md-3">
          <label for="speaking" class="form-label">Speaking</label>
              <select class="form-select" id="speaking" name="speaking" required>
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
                <option value=8.5 >8.5</option>              
              </select>
              <div class="invalid-feedback">
                Please select a valid score.
              </div>
            </div>

            <div class="col-md-3">
            <label for="speaking" class="form-label">Speaking</label>
              <select class="form-select" id="speaking" name="speaking" required>
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
                <option value=8.5 >8.5</option>              
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div> 

            <div class="col-md-3">
            <label for="speaking" class="form-label">Speaking</label>
              <select class="form-select" id="speaking" name="speaking" required>
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
                <option value=8.5 >8.5</option>              
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
            <label for="speaking" class="form-label">Speaking</label>
              <select class="form-select" id="speaking" name="speaking" required>
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
                <option value=8.5 >8.5</option>              
              </select>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4"> -->



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