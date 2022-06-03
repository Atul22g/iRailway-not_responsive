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
<?php
// Create a connection
mysql_connect('localhost', 'root', '') or die(mysql_error());
// echo "Connection Found <br>";

mysql_select_db("atul") or die(mysql_error());
// echo "DataBase Selected <br>";

// 1 Book Ticket

// Create table
// mysql_query("create table irailway( `resevation` VARCHAR(255), `Train` VARCHAR(255), `Passengers` VARCHAR(255), `From` VARCHAR(255), `To` VARCHAR(255), `Date` DATE") or die(mysql_error());
// echo "Table Created <br>";

if(isset($_POST['submit'])){
 $Resevation = $_POST['Resevation_Quota'];
 $Train = $_POST['Train_Name_Number'];
 $passengers = $_POST['passengers'];
 $from = $_POST['Journey_From'];
 $to = $_POST['Journey_To'];
 $Date = $_POST['Date'];

mysql_query("insert into irailway VALUES('$Resevation', '$Train', '$passengers', '$from', '$to', '$Date')") or die(mysql_error());
echo "<br> <h1>Thanks </h1> <br>
<h2> Your Form is Submit.</h2>";
}

// Delete Query

if(isset($_POST['submit3'])){
    $Train = $_POST['Train_Name_Number'];
    $from = $_POST['Journey_From'];
    $to = $_POST['Journey_To'];
    
    mysql_query("delete from irailway WHERE `Train` = '$Train' and `From` = '$from' and `To` = '$to'") or die(mysql_error());
    echo "<h3> Your Ticket Was Canceled </h3>";
  }
?>
</body>
</html>