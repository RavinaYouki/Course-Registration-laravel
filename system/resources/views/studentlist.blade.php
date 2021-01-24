<!DOCTYPE html>
<html >
<head>
  <style>
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  }
  </style>
</head>

<body>
  @include('index')
  <br>
    <div class="content">
<div class="table-responsive" id="find">
  <table class="tables"  style="width:50%">
  <tr>
    <th>Registration ID</th>
    <th>Name</th>
    <th>Email Address</th>
    <th>Department</th>
    <th>Actions</th>
  </tr>
  <?php foreach ($students as $i): ?>
  <tr>
    <td> {{$i->S_ID}} </td>
    <td>{{$i->Name}}</td>
    <td>{{$i->Email}}</td>
    <td>{{$i->Department}}</td>
    <td>
      <a href="delete/{{$i->id}}" class="btn btn-default">Delete</a>
      <a href="edit/{{$i->id}}" class="btn btn-default">Edit</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</div>
</div>
</body>
</html>
