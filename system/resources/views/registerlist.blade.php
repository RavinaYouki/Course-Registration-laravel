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
  <table class="tables" style="width:40%">
    <tr>
      <th>Student ID</th>
      <th>Registered Courses</th>
      <th>Actions</th>
    </tr>

    <?php foreach ($registers as $i): ?>
    <tr>
      <td><h5>{{$i->S_ID}} </h5</td>
      <td><h5>{{$i->CourseCode}} </h5></td>
      <td>
        <a href="deletereg/{{$i->id}}" class="btn btn-default">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
</div>
</body>
</html>
