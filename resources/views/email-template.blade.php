

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

<h2>Styling Tables</h2>

<table id="t01">
  <tr>
    <th>Six selection factors</th>
    <th>Points Require</th> 
    <th>Points Scored</th>
  </tr>
  <tr>
    <td><b>Language skills</b></td>
    <td>50</td>
    <td>50</td>
  </tr>
  <tr>
    <td><b>Education</b></td>
    <td>50</td>
    <td>94</td>
  </tr>
  <tr>
    <td><b>Work experience</b></td>
    <td>50</td>
    <td>80</td>
  </tr>
  <tr>
    <td><b>Age</b></td>
    <td>50</td>
    <td>{{ $emails['age'] }}</td>
  </tr>
  <tr>
    <td><b>Arranged employment in Canada</b></td>
    <td>50</td>
    <td>80</td>
  </tr>
  <tr>
    <td><b>Adaptability</b></td>
    <td>50</td>
    <td>80</td>
  </tr>
</table>

@if ($emails['age'] > 20)
  <p>You are eligible.</p>
@else
  <p>You are not eligible.</p>
@endif

</body>
</html>