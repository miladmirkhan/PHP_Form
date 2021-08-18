<?php
/* use (pdo method) it has more protected,
(mysql and mysqlmy method) less secure */
$host='127.0.0.1';
//you can use ($host='localhost';) too.
$db= 'attendance_db';
// default user is root the root have no password
//ps: dont use user and password is not secure but you use it in your own matchin so its fine
$user='root';
$pass='';

//it use to what simble we expect to work with
$charset='utf8mb4';//universar standard
//data sours name, every time you make a site with data base you need to do this
/*
1- we diclear the driver
2- we declear the host(host=)
3- we declear the data base (dbname=)
4- we declear the charset (charset=)  */
$dsn="mysql:host=$host; dbname=$db; charset=$charset";

// try chatch exseption handling
// if etemp the try part and then if that failed it goto catch part
//here we try to connect to data base\
try{
    //we use PDO class its bilt it php
    // $pdo=new PDO (data sours name, user, password)
 $pdo =new PDO($dsn, $user, $pass);

 // stop if error and show the error
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 // we need to spesifao the error, in this situation we use the PDO one(PDOException)
}
catch(PDOException $e){
    echo"<h1 class='text-danger'>NO DataBase was Found.</h1>";
    // (throw) it stop all excution, and just display the error
    // dont use this all the time
    // (getMessage) it gana print what the error said 
    throw new PDOException($e->getMessage());
    //you can just echo the getMessage but we want the program to stop when we have error
}
 require_once 'crud.php';
$crud=new crud($pdo);
?>
<!-- 
   $host='127.0.0.1'; 
   $db='attendence_db';
   $user='root';
   $pass='';
   $charset='utf8mb4';
   $dsn="mysql:host=$host; dbname=$db; charset=$charset";
   try{
        $pdo =new PDO($dsn,$user,$pass);
 echo "Hello data base";
  }catch(PDOException $e){
    throw new PDOException($e->getMessage());
}
 -->