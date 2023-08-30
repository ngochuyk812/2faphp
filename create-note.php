<?php
$active_menu = "note";
include("./top.inc.php");
$id = $_GET['id'];
if(isset($id) && $id != ""){
	$sql="select title, content, id, id_view, pass from note where id_edit='$id' or id_view='$id'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$data=mysqli_fetch_assoc($res);
		if($data['id_view'] == $id){
			$role = "view";
		}else{
			$role = "edit";
		}
		if(isset($data['pass']) ){
			$content = "*******************************";
			$lock = true;
		}else{
			$content = $data['content'];
			

		}

	}else{
		header('location:index.php');
	}
}else{
	header('location:index.php');
}
?>
<style>
	
	#twofa{
		height:500px;
	}
	input{
		padding:10px;
		width: 100%;
		border-radius:10px;
		outline:none;
		border:1px solid lightgray;
		margin-bottom:10px;
	}
	.list-action{
		margin-bottom:0px;
		display: flex;
		flex-wrap: wrap;
		gap: 10px;
	}

</style>
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quyền</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<p style="margin:0">Link chỉ xem</p>
        <input readonly class="view-input" value="<?php echo $_SERVER['HTTP_HOST']."/create-note.php?id=".$data['id_view']?>"/>
        <input readonly hidden class="old_view" value="<?php echo $data['id_view']?>"/>

		<p style="margin:0">Link chỉnh sửa</p>
        <input readonly class="view-input" value="<?php echo $_SERVER['HTTP_HOST']."/create-note.php?id=".$id?>"/>
        <input readonly hidden class="old_edit" value="<?php echo $id?>"/>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<!-- Modal edit -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rút gọn đường dẫn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<p style="margin:0">Link chỉ xem</p>
		<div class="edit_link">
        <input readonly value="<?php echo $_SERVER['HTTP_HOST']."/create-note.php?id="?>"/>
        <input class="idViewNoteNew"  value="<?php echo $data['id_view']?>"/>
		</div>

		<p style="margin:0">Link chỉnh sửa</p>
		<div class="edit_link">
        <input readonly  value="<?php echo $_SERVER['HTTP_HOST']."/create-note.php?id="?>"/>
        <input class="idEditNoteNew" value="<?php echo $id?>"/>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary update-role-note" >Cập nhập</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Đặt mật khẩu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<p style="margin:0">Nhập mật khẩu</p>
		  <input class="pass-note"  value=""/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close_update_note" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary update-pass-note" >Cập nhập</button>

      </div>
    </div>
  </div>
</div>

<?php

if(isset($data['pass'])){
	echo '<div class="modal fade show" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true" style="display:block;">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Nhập mật khẩu để xem nội dung</h5>
	  
		</div>
		<div class="modal-body">
			<p style="margin:0">Nhập mật khẩu</p>
			<input class="pass-note-enter"  value=""/>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary close_enter_pass" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary submit-pass-note" >Cập nhập</button>
  
		</div>
	  </div>
	</div>
  </div>';
}


?>


    <section class="dashboard">
        <div class="top">
			<input class="hnbgvfdcsaqwdfn1234567" hidden value ="<?php echo $id?>"/>
			<input class="hnbgvfdcsaqwdfn1234567123" hidden value ="<?php echo $data["id"]?>"/>

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
					<?php
						if($role == "edit"){
							echo '<button class="btnh-red" data-toggle="modal" data-target="#exampleModal3"> <i class="uil uil-lock"></i> ĐẶT MẬT KHẢU</button>
							<button class="btnh btnh-info" data-toggle="modal" data-target="#exampleModal"><i class="uil uil-share-alt" ></i> SET QUYỀN CHO URL</button>
							<button class="btnh btnh-purple" data-toggle="modal" data-target="#exampleModal2"><i class="uil uil-link"></i> ĐỔI - RÚT GỌN URL</button>';
						}
					?>
					

				</div>
				<br/>
				<p>Tiêu đề </p>
				<input class="title_note" value ="<?php echo $data["title"] ?>" placeholder="Tiêu đề..."/>
				<br/>
				<p>Nội dung</p>
				<textarea class="content_note" id="twofa" value ="" oninput="countLines()" placeholder="Nhập nội dung không quá 500.000 ký tự
Khi không đặt mật khẩu file sẻ tự xóa sau 30 ngày"><?php echo $content ?></textarea>

				<div class = "list_rs">
				<p>Tổng số ký tự: <span id="line-count">0</span>/500.000 từ</p>
				<button type="button" class="btn btn-primary save-note">Lưu thay đổi</button>


				</div>
			</div>
        </div>
    </section>

	<?php
include("./footer.inc.php")
?>