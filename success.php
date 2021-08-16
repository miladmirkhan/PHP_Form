<head>
<?php
$title="Success";
// require_once it will just require 2 times
require_once 'includes/header.php';?>
  </head>
  <body>
<h1 class="text-center text-success">You have been regesterd.</h1>

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $_GET['firstname'].' '. $_GET['lastname'];?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo $_GET["Spetiality"];?></h6>
      <p class="card-text"><?php echo 'your date of Birth: '. $_GET['date']; ?></p>
      <p class="card-text"><?php echo 'your Email is: '. $_GET['email']; ?></p>
      <p class="card-text"><?php echo 'your Number is: '. $_GET['number']; ?></p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
     </div>
</div>
<?php
//($_GET[]) use to get the input valeo that use for sign up
echo $_GET["firstname"];
echo $_GET["lastname"];
echo $_GET["date"];
echo $_GET["Spetiality"];
echo $_GET["email"];
echo $_GET["number"];

?>
  <?php require_once 'includes/footer.php';?>
  </body>
