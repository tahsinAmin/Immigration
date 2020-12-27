@extends('layouts.app')

@section('content')
<div class="wrapper create-dream">

<!-- <h4 class="mssg success">{{ session('mssg') }}</h4> -->
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

<form action="{{ route('dreamc.index') }}" method="POST">
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
    <!-- <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button> -->
    <input type="submit" name="submit" class="btn btn-primary mt-2" value="Submit"> 
</form>
</div>
@endsection