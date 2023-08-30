<?php
$active_menu = "home";
include("./top.inc.php")
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
				<h4>Lấy Code từ KEY 2FA</h4>
				<br/>
				<p>Key 2FA</p>
				<textarea id="twofa" placeholder="Nhập Full KEY 2FA ở đây ... ¥NQV HJNP QCNP JJIY ... 
L2WA M4BZ RBM2 YVJP ..."></textarea>
				<p class="note">Có thể nhập Full định dạng ID | Pass | 2FA. Mỗi dòng sẽ lấy 1 code.</p>
				<button class="btnh" onclick="get2FA()">LẤY CODE</button>
				<hr/>
				<br/>

				<div class = "list_rs">
				<p>Kết quả</p>

				<textarea id="rs2fa" readonly placeholder="2FA|Code"></textarea>

				</div>
			</div>
        </div>
    </section>

	<?php
include("./footer.inc.php")
?>