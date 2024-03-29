<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Send Email in Laravel 8 Using Gmail SMTP | Programming Fields</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Montserrat&display=swap" rel="stylesheet">
  <style>
    table {
      width:100%;
    }
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 15px;
      text-align: left;
    }
    #t01 tr:nth-child(even) {
      background-color: #eee;
    }
    #t01 tr:nth-child(odd) {
    background-color: #fff;
    }
    #t01 th {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>

  <div>
      <h2 style="font-family: 'Montserrat', sans-serif;color: red;"><b>Dream</b></h2>
      <h2 style="font-family: 'Caveat', cursive;position: relative;
      color: black;
      top: -37px;">Big</h2>
   </div>

<table id="t01">
  <tr>
      <th>Selection Factors</th>
      <th>Maximum Points</th> 
      <th>Your Score</th>
  </tr>
  <tr>
    <td><b>Education</b></td>
      <td>25</td>
      <td>{{ $emails['education'] }}</td>
  </tr>
  <tr>
    <td><b>Language skills</b></td>
    <td>28</td>
    <td>{{ $emails['clb'] }}</td>
  </tr>
  <tr>
      <td><b>Experience</b></td>
      <td>15</td>
      <td>{{ $emails['workexp'] }}</td>
  </tr>
  <tr>
      <td><b>Age</b></td>
      <td>12</td>
      <td>{{ $emails['age'] }}</td>
  </tr>
  <tr>
      <td><b>Job in Canada</b></td>
      <td>10</td>
      <td>{{ $emails['arranged'] }}</td>
  </tr>
  <tr>
      <td><b>Adaptability</b></td>
      <td>10</td>
      <td>{{ $emails['adapt'] }}</td>
  </tr>
  <tr>
    <td><b>Total</b></td>
    <td>100</td>
    <td>{{ $emails['total'] }}</td>
  </tr>
</table>

@if ($emails['total'] >=67)
  <p>You are eligible.</p>
@else
  <p>You are not eligible.</p>
@endif

</body>
</html>