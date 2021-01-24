<head>
</head>
<body>
  @include('index')
  <div class="content">
  <br><br>
  <h3><center>Course Registration Form</center></h3>
<center>
  <form method="post" action="{{url('savecourse')}}">
  {{ csrf_field() }}
  <br>Course Name<br>
  <input type="text" id="course"name="CourseName" maxlength="30"/>

  <br>Course Code<br>
  <input type="text" id="c_code" name="CourseCode" maxlength="30"/>

  <br>Credit<br>
  <input type="is_float" id="cdt" name="Credit" maxlength="100" />

  <br><br>
  <button class="Submit" type="submit" class="registerbtn">Submit</button>

</form>
</center>
</div>
</body>
</html>
