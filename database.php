<?php 
include "dbconnect.php";

if(isset($_POST['login'])){
  $pusername = $_POST['username'];
  $ppassword = $_POST['password'];
  $sql = "SELECT * FROM logincredentials WHERE username = '$pusername' and password = '$ppassword'";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result);
  $count = mysqli_num_rows($result);

  if($count == 1){
    header("Location: home.php");
} else {
  echo '<script>alert("Invalid username or password")</script>';
}
}
?>