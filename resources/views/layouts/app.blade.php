<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

        <!-- Bootstrap core CSS -->
    <!-- <link href="/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Dreamcc
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script type="application/javascript">
  function examFormat(){
    var examstyle = document.myForm.examstyle.value;
    var celpipSwitch = document.getElementById("celpipSwitch");
    var ieltsSwitch = document.getElementById("ieltsSwitch");     

    if(examstyle == "celpip"){
      console.log("CELPIP");
      celpipSwitch.style.display = "block";
      ieltsSwitch.style.display = "none";
    }else if(examstyle == "ielts"){ 
      console.log("IELTS");
      celpipSwitch.style.display = "none";
      ieltsSwitch.style.display = "block";
    }else{
      celpipSwitch.style.display = "none";
      ieltsSwitch.style.display = "none";
    }
  }

  function show1(){
    var cF= document.myForm.cFirstLang.value;
    console.log("CELPIP");
    var ifEn = document.getElementById("ifEn");
    var celpipFr = document.getElementById("ifFr");
    var cS1 = document.getElementById("cLangChange1");
    var cS2 = document.getElementById("cLangChange2");

    if(cF == "eng"){
      console.log("I am in English");
      ifEn.style.display = "block";
      celpipFr.style.display = "none";
      cS1.innerHTML = "(French)";
    }else if(cF == "fr"){ 
      ifEn.style.display = "none";
      celpipFr.style.display = "block";
      cS2.innerHTML = "(English)";
    }else{
      ifEn.style.display = "none";
      celpipFr.style.display = "none";
      cS1.innerHTML = "";
      cS2.innerHTML = "";
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
    var spouseRelated =  document.getElementById("spouseRelated");
    spouseRelated.style.display = (spouseRelated.style.display == "none") ? "block": "none";
  }

  function chkcontrol(j) {
    var sum=0;
    for(var i=1; i <= 7; i++){
    var checkInput = document.getElementById("check-"+i);
      if(checkInput.checked){
        sum = sum + parseInt(checkInput.value);
      }
      
      if(sum >10){
        sum = sum - parseInt(checkInput.value);
        checkInput.checked = true;
        for(var i=1; i <=7; i++){
          document.getElementById("check-"+i).disabled= true;
        }
        document.getElementById("married").disabled= true;

        alert("It seems you have reached the maximum points in the Adaptibility Section") 
      }
    }
    document.getElementById("sumAdaptability").value = sum;
    console.log(document.getElementById("sumAdaptability").value);
  }
</script>

    

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
</body>
</html>
