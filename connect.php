<!-- CREATE TABLE `atul`.`irailway` ( `Sr. no` INT(255) NOT NULL AUTO_INCREMENT , `resevation` VARCHAR(255) NOT NULL , `Train_name` VARCHAR(255) NOT NULL , `Passengers` VARCHAR(255) NOT NULL , `From` VARCHAR(255) NOT NULL , `To` VARCHAR(255) NOT NULL , `Date` DATE NOT NULL , PRIMARY KEY (`Sr. no`)) ENGINE = InnoDB; -->

<?php
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "atul";

// Create a connection
$conn = mysqli_connect("localhost","root" ,"");

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_POST['submit'])){
 

}
?>