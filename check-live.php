<?php
$active_menu = "checklive";
include("./top.inc.php")
?>
<style>
	.list_rs{
		display: flex;
		gap:20px;
		flex-wrap: wrap;
	}
	.list_rs div{
		flex:1;

	}
	.list_rs textarea{
		height:150px;

	}
	@media (max-width: 800px) {
    .list_rs{
        flex-direction: column;
    }
	
}
	.live textarea{
		background: #0e4bf136;
		border: 1px solid #0E4BF1;
	}
	.die textarea{
		background: #ff63475e;
		border: 1px solid #FF6347;
	}
	.live p{
		color: #0E4BF1;
	}
	.die p{
		color: #FF6347;
	}

	.live span{
		color: #0E4BF1;
	}
	.die span{
		color: #FF6347;
	}


</style>

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
				<h4>Check Like ID Facebook</h4>
				<br/>
				<p>Danh sách ID</p>
				<textarea id="twofa" placeholder="Nhập danh sách ID mỗi dòng"></textarea>
				<button class="btnh" onclick="checkLiveUID()">CHECK LIVE</button>
				<hr/>
				<br/>

				<div class = "list_rs">
				<div class="live">
					<p>Tài khoản Live <span>0</span></p>
					<textarea id="livetx" readonly placeholder=""></textarea>
				</div>

				<div  class="die">
					<p>Tài khoản Die <span>0</span></p>
					<textarea id="dietx" readonly placeholder=""></textarea>
				</div>


				</div>
			</div>
        </div>
    </section>
	<?php
include("./footer.inc.php")
?>