<?php
require('connection.inc.php');
require('functions.inc.php');

if(isset($_POST['logout'])) {
session_destroy();
header("refresh: 0");
}
?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="/assets/main/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Tool Lấy Mã FA, Xử Lý Text Free</title> 
    <meta name="description" content="Tool Free Lấy Mã 2Fa, Xử lý text, Notepad Online, Lách content, Check Live UID Facebook, Mua Bán Via BM Facebook, Dịch vụ tăng Like, Sell Clone, Sell ACCOUNT Facebook">
    <meta property="og:url" content="https://toolfree.vn/" />
<meta property="og:title" content="Tool Miễn Phí" />
<meta property="og:image" content="https://toolfree.vn/images/free-seo-tools.png" />
<meta property="og:description" content="Tool Free Lấy Mã 2Fa, Xử lý text, Notepad Online, Lách content, Check Live UID Facebook, Mua Bán Via BM Facebook, Dịch vụ tăng Like, Sell Clone, Sell ACCOUNT Facebook" /> 



    <link rel="shortcut icon" type="image/png" href="/images/toolfree3.png"/>

</head>
<body>
    <nav>
        <div class="logo-name">
            <class="logo-image">
                <a href="https://viaads.vn/" target="_self"> 
           <img ismap src="/images/logo2.gif"  alt="" width="160" height="auto"/> 
        </a>     
  <!-- <span class="logo_name">TOOL FREE</span> -->
        </div> 

        <div class="menu-items">
            <ul class="nav-links">
                <?php
                if ($active_menu == "home") {
                    echo ' <li class="active"><a href="/">
                    <i class="uil uil-search-alt"></i>
                    <span class="link-name ">Lấy code từ 2FA</span>
                </a></li>';
                } else {
                    echo ' <li class=""><a href="/">
                    <i class="uil uil-search-alt"></i>
                    <span class="link-name ">Lấy code từ 2FA</span>
                </a></li>';
                }

                if ($active_menu == "checklive") {
                    echo '<li class="active"><a href="check-live.php">
                    <i class="uil uil-sort-amount-down"></i>
                    <span class="link-name">Check Live ID Facebook</span>
                </a></li>';
                } else {
                    echo '<li><a href="check-live.php">
                    <i class="uil uil-sort-amount-down"></i>
                    <span class="link-name">Check Live ID Facebook</span>
                </a></li>';
                }

                if ($active_menu == "fixContent") {
                    echo '<li class="active"><a href="fix-content.php">
                    <i class="uil uil-language"></i>
                    <span class="link-name">Tool lách content</span>
                </a></li>';
                } else {
                    echo '<li><a href="fix-content.php">
                    <i class="uil uil-language"></i>
                    <span class="link-name">Tool lách content</span>
                </a></li>';
                }

                if ($active_menu == "note") {
                    echo '<li class="active"><a class="handleNote" href="#">
                    <i class="uil uil-clipboard-notes"></i>
                    <span class="link-name">Lưu Note Online</span>
                </a></li>';
                } else {
                    echo '<li><a class="handleNote" href="#">
                    <i class="uil uil-clipboard-notes"></i>
                    <span class="link-name">Lưu Note Online</span>
                </a></li>';
                }

                if ($active_menu == "manage") {
                    echo '<li class="active"><a href="manage.php">
                    <i class="uil uil-cloud-check"></i>
                    <span class="link-name">Quán lý Note Online</span>
                </a></li>';
                } else {
                    echo '<li><a href="manage.php">
                    <i class="uil uil-cloud-check"></i>
                    <span class="link-name">Quán lý Note Online</span>
                </a></li>';
                }
                if ($active_menu == "tool-free") {
                    echo '<li class="active"><a href="tool-free.php">
                    <i class="uil uil-edit"></i>
                    <span class="link-name">Tools xử lý Text</span>
                </a></li>';
                } else {
                    echo '<li><a href="tool-free.php">
                    <i class="uil uil-edit"></i>
                    <span class="link-name">Tools xử lý Text</span>
                </a></li>';
                }

                ?>
                
            </ul>
            
            <ul class="logout-mode">
                <!-- <li><a href="#">
                    <i class="uil uil-user-md"></i>
                    <span class="link-name">Hồ sơ</span>
                </a></li> -->

                <form action="" method="post" hidden>
                <input type="hidden" name="logout" value="true" />
                <button class="logout_bt">Logout</button>
                </form>
                <?php
                if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){
                    echo '<li><a href="#" class="show-bt-logout">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Đăng xuất</span>
                </a></li>';
                }else{
                   echo '<li><a href="/login.php" class="">
                   <i class="uil uil-signin"></i>
                   <span class="link-name">Đăng nhập</span>
               </a></li>';
                }
                
                ?>
                <!-- <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div> -->
            </li>
            </ul>
        </div>
    </nav>