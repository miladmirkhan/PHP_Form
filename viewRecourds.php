<?php
$title="View Records";
// require_once it will just require 2 times
require_once 'includes/header.php';
require_once 'DB/conn.php';

// we get the data enter in site
 $results=$crud->getAttendees();
?>
<body>

<!-- makeing a table for recourd in the site -->
<table class="table table-dark table-striped">
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birthday</th>
        <th>Email Address</th>
        <th>Contact Number</th>
        <th>Specialty</th>
    </tr>
        <?php //while loop do this oporation for eatch item inside of this collaction 
        while($r=$results->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <!-- the database row -->
            <td><?php echo $r['attendee_ID']?></td>
            <td><?php echo $r['fname']?></td>
            <td><?php echo $r['lname']?></td>
            <td><?php echo $r['dob']?></td>
            <td><?php echo $r['email']?></td>
            <td><?php echo $r['contact']?></td>
            <td><?php echo $r['name']?></td>
        </tr>
        <?php }?>
</table>

<?php require_once 'includes/footer.php';?>
</body>