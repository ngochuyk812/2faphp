<?php
  // Include the wp-load.php so that we can use username_exists() function in WordPress API
  require('connection.inc.php');
  require('functions.inc.php');
  $user = "";
  if(isset($_SESSION['ADMIN_USERNAME'])){
    $user = $_SESSION['ADMIN_USERNAME'];
  }
  $id_view = uniqid();
  $id_edit = uniqid();

  $sql = "INSERT INTO note (username, id_edit, id_view) VALUES ('$user', '$id_edit', '$id_view')";
  $res=mysqli_query($con,$sql);	
  if ($res) {
    $sql = "SELECT * FROM note where id_view = '$id_view'";
    $res=mysqli_query($con,$sql);	
    $count=mysqli_num_rows($res);
    
    if($count>0){
      $row=mysqli_fetch_assoc($res);
      echo json_encode($row);
    }
  } else {
    echo "Error";
  }
?>