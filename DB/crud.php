<?php

class crud{
    private $db;


    function __construct($conn){
  $this->db= $conn; }

  public function insertAttendees($fname, $lname, $dob, $email, $contact, $specialty){

    try {
        $sql="INSERT INTO attendee(fname,lname,dob,email,contact,Specialty) VALUES(:fname,:lname,:dob,:email,:contact,:specialty)";
        $stmt= $this->db->prepare($sql);

        $stmt->bindparam(':fname',$fname);
        $stmt->bindparam(':lname',$lname);
        $stmt->bindparam(':dob',$dob);
        $stmt->bindparam(':email',$email);
        $stmt->bindparam(':contact',$contact);
        $stmt->bindparam(':specialty',$specialty);

        $stmt->execute();
        return true;

    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
  } 
  public function getAttendees(){
      // SQL code to get all the data that entered
   $sql="SELECT * FROM `attendee` a inner join specialty s on a.specialty=s.specialty_id";
// use to return all data to website
$result=$this->db->query($sql);
return $result;
  }

public function getSpecialty(){
 $sql="SELECT * FROM `specialty`";
$result=$this->db->query($sql);
return $result;
}
}
?>

<!-- <?php/* 
     class crud{
         private $db;
        
         // we use ( __construct( paramitar) )
        // constructor to initialize private tothe database connection
         function __construct($conn){
             // (this) give all the access to all private and poblic atarbuat 
         
             $this->db = $conn;
         }

         //insert spose to get some paramitars to know what should be inseting
         // valeo of (get and post method ) that valeo we get from the submit (action)
         // we make paramitar for valeoes
        public function insert($fname, $lname, $dob, $email, $phone, $specialty){
             
            // write try slect 2one
            try {
                //SQL statment
                $sql="INSERT INTO attendee(firstname,lastname,DateOB,email,number_phone,Spetiality_id) VALUES(:fname,:lname,:dob,:email,:phone,:specialty)";//define
                $stmt = $this->db->prepare($sql);//prepare

                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':phone',$phone);
                $stmt->bindparam(':specialty',$specialty);

                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 
     }*/
     ?>-->