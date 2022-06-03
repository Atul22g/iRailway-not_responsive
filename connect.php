<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
      h3 {
        font-size: 1.6em;
        text-align: center;
        padding: 0.6rem; 
      }

    </style>
    <title>Connection</title>
</head>
<body>
<form method="post" class="form">
          <h2>You Cancel The Ticket</h2>
          <table>
            <tr>
              <label for="Train_Name_Number">
                <th>Train Name or Number :-</th>
                <td>
                  <input
                    type="text"
                    name="Train_Name_Number"
                    placeholder="Enter the Train Name or Number"
                    required
                  />
                </td>
              </label>
            </tr>

            <tr>
              <label for="Journey_From">
                <th>Journey From :-</th>
                <td>
                  <input
                    type="text"
                    name="Journey_From"
                    placeholder="Enter the Journey From"
                    required
                  />
                </td>
              </label>
            </tr>

            <tr>
              <label for="Journey_To">
                <th>Journey To :-</th>
                <td>
                  <input
                    type="text"
                    name="Journey_To"
                    placeholder="Enter the Journey To"
                    required
                  />
                </td>
              </label>
            </tr>
            <tr>
              <th colspan="2">
                <input class="submit" type="submit" name="submit3" />
              </th>
            </tr>
          </table>
        </form>

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
// if ($conn){
//     echo "<h3>Connection Found<h2>";
// }

// 1 Book Ticket

if(isset($_POST['submit'])){
 $Resevation = $_POST['Resevation_Quota'];
 $Train = $_POST['Train_Name_Number'];
 $passengers = $_POST['passengers'];
 $from = $_POST['Journey_From'];
 $to = $_POST['Journey_To'];
 $Date = $_POST['Date'];

$sql1 = "insert into `irailway` (`resevation`, `Train`, `Passengers`, `From`, `To`, `Date`) VALUES('$Resevation', '$Train', '$passengers', '$from', '$to', '$Date')";

mysqli_query($conn, $sql1);

echo "<h3>Thanks </h3>
<h3> Your Form is Submit.</h3>";
}

// Delete Query

if(isset($_POST['submit3'])){
  $Train = $_POST['Train_Name_Number'];
  $from = $_POST['Journey_From'];
  $to = $_POST['Journey_To'];
  
  $sql = "DELETE FROM `irailway` WHERE `Train` = '$Train' and `From` = '$from' and `To` = '$to'";
  $result = mysqli_query($conn, $sql);
  echo "<h3> Your Ticket Was Canceled </h3>";
}
?>
</body>
</html>