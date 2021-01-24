<head>
</head>
<body>
  @include('index')
  <div class="content">
  <br><br>
  <h3><center>Form</center></h3><center>
  <form method="post" action="{{url('saves')}}">
  {{ csrf_field() }}
      <br>Registration Id<br>
    <input type="number" id="id" name="S_ID" maxlength="30"/>

        <br>Course Code<br>
    <input type="text" id="c_code" name="CourseCode" maxlength="30"/>

<br><br>
    <button class="Submit" type="submit" class="registerbtn">Submit</button>

</form></center>
</div>
</body>
</html>
