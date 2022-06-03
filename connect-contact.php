<?php
// 2 Contact me

// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "atul";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['submit2'])){
  $name = $_POST['name'];
  $Email = $_POST['Email'];
  $phone = $_POST['phone'];
  $massage = $_POST['massage'];
  
  $sql1 = "INSERT INTO `contact me` (`name`, `email`, `phone`, `messages`) VALUES ('$name', '$Email', '$phone', '$massage')";
  mysqli_query($conn, $sql1);
  
  echo "<h3>Thanks </h3>
  <h3> Your Form is Submit.</h3>";
}
?>