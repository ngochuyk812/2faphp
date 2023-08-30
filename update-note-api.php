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
    $id_edit = $_POST["id_edit"];
    $sql="select * from note where id_edit='$id_edit'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
      $row=mysqli_fetch_assoc($res);
      if(isset($row["pass"])){
        if(isset($_POST["pass_note"])){
          if($row["pass"] != $_POST["pass_note"]){
            echo 0;
            die();
          }

        }else{
        echo 0;
        die();

        }
      }
      $id = $row['id'];
      if(isset($_POST["title"])){
        $title = $_POST["title"];
        $sql="UPDATE note SET title='$title' where id = $id";
        $res=mysqli_query($con,$sql);

      }
      if(isset($_POST["content"])){
        $content = $_POST["content"];
        $sql="UPDATE note SET content='$content' where id = $id";
        $res=mysqli_query($con,$sql);
      }
      if(isset($_POST["pass"])){
        $pass = $_POST["pass"];
        $sql="UPDATE note SET pass='$pass' where id = $id";
        $res=mysqli_query($con,$sql);
      }

      if(isset($_POST["id_edit_new"]) && trim($_POST["id_edit_new"]) != ""){
        $id_edit_new = $_POST["id_edit_new"];
        $sql="select * from note where id_view='$id_edit_new' or id_edit='$id_edit_new'";
        $res=mysqli_query($con,$sql);
        $count=mysqli_num_rows($res);
        if($count==0){
          $sql="UPDATE note SET id_edit='$id_edit_new' where id = $id";
          $res=mysqli_query($con,$sql);
        }else{
          echo 0;
          die();
        }
       
      }
      if(isset($_POST["id_view_new"]) && trim($_POST["id_view_new"]) != ""){
        $id_view_new = $_POST["id_view_new"];
        $sql="select * from note where id_view='$id_view_new' or id_edit='$id_view_new'";
        $res=mysqli_query($con,$sql);
        $count=mysqli_num_rows($res);
        if($count==0){
          $sql="UPDATE note SET id_view='$id_view_new' where id = $id";
          $res=mysqli_query($con,$sql);
        }else{
          echo 0;
          die();

        }
      }

     
    }
    
    echo 1;
  }
?>