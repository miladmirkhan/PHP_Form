<head>
<?php
$title="Success";
// require_once it will just require 2 times
require_once 'includes/header.php';
require_once 'db/conn.php';

if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $dob=$_POST['dob'];
  $email=$_POST['email'];
  $contact=$_POST['number'];
  $specialty=$_POST['specialty'];
  //Call function to insert and track if success or not
  $isSuccess=$crud->insertAttendees($fname,$lname,$dob,$email,$contact,$specialty);

if($isSuccess){
  echo '<h1 class="text-center text-success">You Have Been Registered. </h1>';

}else{
 echo '<h1 class="text-center text-danger">You Have Not Been Registered. </h1>';
}
}
?>
  </head>
  <body>
<!--  get method
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><//?php echo $_GET['firstname'].' '. $_GET['lastname'];?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><//?php echo $_GET["Spetiality"];?></h6>
      <p class="card-text"><//?php echo 'your date of Birth: '. $_GET['date']; ?></p>
      <p class="card-text">>//?php echo 'your Email is: '. $_GET['email']; ?></p>
      <p class="card-text"><//?php echo 'your Number is: '. $_GET['number']; ?></p>
     </div>
</div>
-->

<!-- post method only work with post method
use to hide the information in search section
ps: post use for sensetive information, it not show in url -->
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $_POST['fname'].' '. $_POST['lname'];?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST["specialty"];?></h6>
      <p class="card-text"><?php echo 'your date of Birth: '. $_POST['dob']; ?></p>
      <p class="card-text"><?php echo 'your Email is: '. $_POST['email']; ?></p>
      <p class="card-text"><?php echo 'your Number is: '. $_POST['number']; ?></p>
     </div>
</div

<?php
//($_GET[]) use to get the input valeo that use for sign up with only get method
// you can use it for search becouse you need the url to access but for sensetive information you did not
//want to be share in url so for that use (post method)
/*
echo $_GET["firstname"];
echo $_GET["lastname"];
echo $_GET["date"];
echo $_GET["Spetiality"];
echo $_GET["email"];
echo $_GET["number"];
*/
/*
 */
?>
  <?php require_once 'includes/footer.php';?>
  </body>