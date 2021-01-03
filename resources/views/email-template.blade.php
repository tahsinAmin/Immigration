<!DOCTYPE html>
<html>
<head>
<title>Send Email in Laravel 8 Using Gmail SMTP | Programming Fields</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

<h2>DreamC</h2>

<table id="t01">
  <tr>
      <th>Selection Factors</th>
      <th>Maximum Points</th> 
      <th>Your Score</th>
  </tr>
  <tr>
    <td><b>Education</b></td>
      <td>25</td>
      <td>80</td>
  </tr>
  <tr>
    <td><b>Language skills</b></td>
    <td>28</td>
    <td>50</td>
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
      <td>80</td>
  </tr>
  <tr>
      <td><b>Adaptability</b></td>
      <td>10</td>
      <td>80</td>
  </tr>
  <tr>
    <td><b>Total</b></td>
    <td>100</td>
    <td>{{ $emails['total'] }}</td>
  </tr>
</table>

@if ($emails['age'] >=12 && $emails['workexp'] > 0)
  <p>You are eligible.</p>
@else
  <p>You are not eligible.</p>
@endif

</body>
</html>