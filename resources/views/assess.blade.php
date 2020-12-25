<?php

  // include('config/db_connect.php');

  $email = $name = $age = '';

  $errors = array('email' => '', 'name' => '', 'age' => '');

	if(isset($_POST['submit'])){
      echo $_POST['email'];
      $email =  $_POST['email'];
      $name = $_POST['name'];
      $age = $_POST['age'];

      // $sql = "SELECT email, buyer_id FROM buyer_profile WHERE name='".$name."'";
      // $result = mysqli_query($conn, $sql);
      // $userInfo = mysqli_fetch_assoc($result);

      session_start();
      $_SESSION['em'] = $email;

      // header("Location:{{ url('/send-email') }}");
      // Route::get("send-email", [EmailController::class, "sendEmail"]);
      exit();

	}else{
    // echo "Hello";
  } // end POST check

?>


@extends('layouts.layout')

@section('content')
    <div class="container">
    <form action="" method="POST">
  <fieldset>
    <legend>Form Assessment</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" name="age" class="form-control" id="age" placeholder="Age" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
  </fieldset>
</form>
</div>
@endsection