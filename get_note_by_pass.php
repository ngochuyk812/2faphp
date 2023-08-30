<?php
  // Include the wp-load.php so that we can use username_exists() function in WordPress API
  require('connection.inc.php');
  require('functions.inc.php');
  $user = "";
  
  if(isset($_SESSION['ADMIN_USERNAME'])){
    $user = $_SESSION['ADMIN_USERNAME'];
  }
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Xử lý dữ liệu gửi lên
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $sql="select * from note where id='$id' and pass = '$pass'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
      $row=mysqli_fetch_assoc($res);
      $result = array(
        'content' => $row['content'],
        'status' => "success"
      );
      echo json_encode($result);
      die();
    }
    else
    echo json_encode([
      'status' => "error",
    ]);  }
?>