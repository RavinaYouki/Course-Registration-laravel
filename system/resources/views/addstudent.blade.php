<head>
</head>
<body>
  @include('index')
  <div class="content">
  <br><br>
  <h3><center>Registration Form</center></h3>
  <center><form method="post" action="{{url('saved')}}">
  {{ csrf_field() }}
  <br>Name<br>
  <input type="text" id="sname" name="Name" maxlength="30"/>

  <br>Email Address<br>
  <input type="text" id="e_add" name="Email" maxlength="100" />

  <br>Registration Id<br>
  <input type="number" id="rid" name="S_ID" maxlength="30"/>

  <br>Department<br>
  <input type="text" id="dept" name="Department" maxlength="100" />
  <br><br>
  <button class="Submit" type="submit" class="registerbtn">Submit</button>
</form></center>
</div>
</body>
