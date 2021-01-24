<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:Tomato;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav">
  <a href="students">Students</a>
  <a href="courses">Courses</a>
  <a href="/add">Insert Student</a>
  <a href="create">Insert Course</a>
  <a href="registered">Registration</a>
	<a href="list">List</a>
<br>
  <form action="{{url('find')}}" method="get" role="search">
      {{ csrf_field() }}
      <div class="input-group">
          <input type="number" class="form-control" name="search"
              placeholder="Search "> <span class="input-group-btn">
              <button type="submit" class="fa fa-search">
                  <span class="glyphicon glyphicon-search"></span>
              </button>
          </span>
      </div>
  </form>


</div>

</body>
</html>
