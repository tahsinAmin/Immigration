@extends('layouts.layout')

@section('content')
<div class="wrapper create-dream">
<form action="/dreamc" method="POST">
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