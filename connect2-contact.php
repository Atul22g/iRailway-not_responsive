<?php
// 2 Contact me

// Create a connection
mysql_connect('localhost', 'root', '') or die(mysql_error());
// echo "Connection Found <br>";

mysql_select_db("atul") or die(mysql_error());
// echo "DataBase Selected <br>";

// Create table
// mysql_query("create table contact_me( `name` VARCHAR(255), `email` VARCHAR(255), `phone` VARCHAR(255), `messages` VARCHAR(255)") or die(mysql_error());
// echo "Table Created <br>";


if(isset($_POST['submit2'])){
$name = $_POST['name'];
$Email = $_POST['Email'];
$phone = $_POST['phone'];
$massage = $_POST['massage'];

mysql_query("insert into contact_me VALUES('$name', '$Email', '$phone', '$massage')") or die(mysql_error());
echo "<br> <h1>Thanks </h1> <br>
<h2> Your Form is Submit.</h2>";
}
?>