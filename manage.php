<?php


$active_menu = "manage";
include("./top.inc.php");
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
   header('location:login.php');
   die();
}
$username = $_SESSION['ADMIN_USERNAME'];

$sql = "SELECT COUNT(*) AS count FROM note WHERE username = '".$username."'";
$sllPage=mysqli_query($con,$sql);
$sllPage = mysqli_fetch_assoc($sllPage);
$linit = 10;
$page = 1;
if(isset($_GET['page'])) {
    $page =$_GET['page'];
}
$offset = ($page - 1) * $linit;

$sql="select * from note where username ='".$username."' LIMIT ".$linit." offset ".$offset;
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);

?>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <!-- <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div> -->
            
            <?php
			if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){
				echo '            <img src="/images/avatar.svg" alt="">
				';
			}else{
			   echo '<a href="/login.php" class="">
			   <i class="uil uil-signin"></i>
			   <span class="link-name">Đăng nhập</span>
		   </a>';
			}
			
			?>
              </div>

        <div class="dash-content">
            <div class="box">
				<div class="list-action">
					<button class="btnh handleCreateNote"><i class="uil uil-create-dashboard"></i> TẠO MỚI</button>
				</div>
				<br/>
				<h5>Danh sách Note</h5>
<table class="table align-middle mb-0 bg-white table_view">
  <thead class="bg-light">
    <tr>
      <th>Tiêu đề</th>
      <th>Ngày tạo</th>
      <th>Còn lại</th>
      <th>Trạng thái</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($count > 0) {
      while ($row = mysqli_fetch_assoc($res)) {
        $title = $row["title"]; 
        if($title == ""){
          $title = "Không có tiêu đề";
        }
        $createAt = new DateTime($row["create_at"]);
        $currentDate = new DateTime();
        
        $interval = $currentDate->diff($createAt);
        $numberOfDays = $interval->days;
        $numberOfDays = 30 - $numberOfDays;

          echo '<tr>
          <td>
            <div class="d-flex align-items-center">
              <div class="ms-3">
                <p class="fw-bold mb-1">'.$title.'</p>
              </div>
            </div>
          </td>
          <td>
            <p class="fw-normal mb-1">'.$row["create_at"].'</p>
          </td>
          <td>
            <p class="fw-normal mb-1">'.$numberOfDays.' ngày</p>
          </td>
          <td>
            <span class="badge badge-primary rounded-pill d-inline"
                  >Active</span
              >
          </td>
          <td>
            <a
                    href="/create-note.php?id='.$row["id_edit"].'"
                    type="button"
                    class="btn btn-link btn-rounded btn-sm fw-bold"
                    data-mdb-ripple-color="dark"
                    >
              Sửa
            </a>
            <button
                    onclick="deleteNote('.$row["id"].')"
                    type="button"
                    class="btn btn-link btn-rounded btn-sm fw-bold"
                    data-mdb-ripple-color="dark"
                    >
              Xóa
            </button>
          </td>
        </tr>';
        
      };
  }
    ?>

  </tbody>
</table>
<br/>
<div>
  <ul class="pagination">
  <li class="page-item <?php if($page == 1){echo "disabled";}?>">
      <a href="<?php echo '/manage.php?page='.($page-1)?>" class="page-link">Previous</a>
  </li>
  <?php
  $sllPage = $sllPage["count"] / 10;
  $sllPage = ceil($sllPage);
  for ($x = 1; $x <= $sllPage; $x++) {
    if($x == $page){
      echo '<li class="page-item active" aria-current="page">
      <a class="page-link" href="/manage.php?page='.$x.'">'.$x.' <span class="visually-hidden">(current)</span></a>
    </li>';
    }else{
      echo '<li class="page-item"><a class="page-link" href="/manage.php?page='.$x.'">'.$x.'</a></li>';
    }
  }
  ?>
  <li class="page-item <?php if($page == $sllPage){echo "disabled";}?>">
      <a class="page-link" href="<?php echo '/manage.php?page='.($page+1)?>">Next</a>
    </li>
  </ul>
</div>

				</div>
			</div>
        </div>
        
    </section>

	<?php
include("./footer.inc.php")
?>