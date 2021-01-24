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
<div class="table-responsive">
  <table class="tables" style="width:50%">
  <tr>

    <th>Course Name</th>
    <th>Course Code</th>
    <th>Credit</th>
    <th>Actions</th>
  </tr>
  <?php foreach ($course as $i): ?>
  <tr>

    <td> {{$i->CourseName}} </td>
    <td>{{$i->CourseCode}}</td>
    <td>{{$i->Credit}}</td>
    <td>
      <a href="deletecourse/{{$i->id}}" class="btn btn-default">Delete</a>
      <a href="editcourse/{{$i->id}}" class="btn btn-default">Edit</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</div>
</div>
</body>
</html>
