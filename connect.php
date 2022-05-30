<!-- CREATE TABLE `atul`.`irailway` ( `Sr. no` INT(255) NOT NULL AUTO_INCREMENT , `resevation` VARCHAR(255) NOT NULL , `Train` VARCHAR(255) NOT NULL , `Passengers` VARCHAR(255) NOT NULL , `From` VARCHAR(255) NOT NULL , `To` VARCHAR(255) NOT NULL , `Date` DATE NOT NULL , PRIMARY KEY (`Sr. no`)) ENGINE = InnoDB; -->


<!-- CREATE TABLE `atul`.`contact me` ( `Sr. no` INT(255) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `phone` VARCHAR(255) NOT NULL , `messages` VARCHAR(255) NOT NULL , PRIMARY KEY (`Sr. no`)) ENGINE = InnoDB; -->
<?php
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "atul";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if ($conn){
    echo "<h2 style='color:green';>Connection Found<h2>";
}

if(isset($_POST['submit'])){
 $Resevation = $_POST['Resevation_Quota'];
 $Train = $_POST['Train_Name_Number'];
 $passengers = $_POST['passengers'];
 $from = $_POST['Journey_From'];
 $to = $_POST['Journey_To'];
 $Date = $_POST['Date'];

$sql1 = "insert into `irailway` (`resevation`, `Train`, `Passengers`, `From`, `To`, `Date`) VALUES('$Resevation', '$Train', '$passengers', '$from', '$to', '$Date')";

mysqli_query($conn, $sql1);

echo "<br> <h1>Thanks </h1> <br>
<h2> Your Form is Submit.</h2>";
}

if(isset($_POST['submit2'])){
$name = $_POST['name'];
$Email = $_POST['Email'];
$phone = $_POST['phone'];
$massage = $_POST['massage'];

$sql1 = "INSERT INTO `contact me` (`name`, `email`, `phone`, `messages`) VALUES ('$name', '$Email', '$phone', '$massage')";

;


mysqli_query($conn, $sql1);

echo "<br> <h1>Thanks </h1> <br>
<h2> Your Form is Submit.</h2>";
}
?>