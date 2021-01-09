



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Blog Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <!-- Bootstrap core CSS -->
    <!-- <link href="/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!-- <link href="blog.css" rel="stylesheet"> -->
    <link href="/css/main.css" rel="stylesheet">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;family=Yellowtail&amp;display=swap" rel="stylesheet">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1b49d7e787.js"></script>


</head>
    <body>

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

  <form action="{{ route('dreamc.index') }}" class="container" name="myForm" method="POST">
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
      <h3>Language</h3>
      <h4>
        First Official Language
        <select class="form-select" id="firstlang" name="firstlang" onchange="show();" required>
            <option value="">Choose...</option>
              <option value="eng">English</option>
              <option value="fr">French</option>
        </select>
      </h4>
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

      <h4 class="my-4">
        Second Official Language
        <span id="langchange" name="seecondlang"></span>
      </h4>
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

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <script>
        function show(){
          console.log("Hello");
          var f= document.myForm.firstlang.value;
          console.log(f);
          var s = document.getElementById("langchange");
          if(f == "eng"){
            s.innerHTML = "(French)";
          }else if (f == "fr"){
            s.innerHTML = "(English)";
          }
          
          
        }
      </script>
  </body>
</html>