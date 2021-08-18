<head>
<?php
$title="Index";
// require_once it will just require 2 times
require_once 'includes/header.php';
require_once 'DB/conn.php';?>
  </head>
  <body>
   <h1 class="text-center">Hello, welcome to confrance</h1>
   <!-- get method when we click submit we want an action
  action method is the paige that cames after clicking after get
so (get) use to make, slect(the recourds) the action after clicking
(action) show the action of it.
(name) use to access the inputs in server 
ps: you should use this in <input> to get input valeo 
ps: you shoud use only one name for a div
ps: its better to not use for sensetive information
-->
<!-- post method use 
 -->
   <form method="post" action="success.php">
   <div class="mb-2" >
    <label for="Firstname" class="form-label">Firstname:</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="fname">
  </div>
  <div class="mb-2" id='lastname' >
    <label for="Lasttname" class="form-label">Lastname:</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="lname">
  </div>
  <div class="mb-2">
    <label for="Lasttname" class="form-label" id="datepicker">Date Of Birth:</label>
    <input type="date" class="form-control" name="dob">
  </div>
  <div class="mb-2" id='Spetiality'>
    <label for="Lasttname" class="form-label">Area of Expertise:</label>
    <select id="disabledSelect" class="form-select" name="specialty">
    <option>None</option>
        <option value="3">Database Admin</option>
        <option>Software Developer</option>
        <option>IT Adviser</option>
        <option>More</option>
        </select>
  </div>
 
  <div class="mb-2" id="email" >
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-2" id="number">
    <label for="exampleInputEmail1" class="form-label">Number:</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="number">
    <div id="emailHelp" class="form-text">We'll never share your number with anyone else.</div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <div class="d-grid gap-2" id="submit">
  <button type="submit" class="btn btn-primary" type="button" name="submit">Submit</button>
</div>
</form>
  <?php require_once 'includes/footer.php';?>
  </body>
</html>