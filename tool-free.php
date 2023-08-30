<?php
$active_menu = "tool-free";
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
				<h4>Tool xử lý text</h4>
				<br/>
				<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
					<li class="nav-item" role="presentation">
						<a
						class="nav-link active"
						id="ex1-tab-1"
						data-mdb-toggle="tab"
						href="#ex1-tabs-1"
						role="tab"
						aria-controls="ex1-tabs-1"
						aria-selected="true"
						>Cắt Chuỗi</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-2"
						data-mdb-toggle="tab"
						href="#ex1-tabs-2"
						role="tab"
						aria-controls="ex1-tabs-2"
						aria-selected="false"
						>Chèn Chuỗi</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-3"
						data-mdb-toggle="tab"
						href="#ex1-tabs-3"
						role="tab"
						aria-controls="ex1-tabs-3"
						aria-selected="false"
						>Ghép Dòng</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-4"
						data-mdb-toggle="tab"
						href="#ex1-tabs-4"
						role="tab"
						aria-controls="ex1-tabs-4"
						aria-selected="false"
						>Lọc Trùng</a
						>
					</li>
					
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-6"
						data-mdb-toggle="tab"
						href="#ex1-tabs-6"
						role="tab"
						aria-controls="ex1-tabs-6"
						aria-selected="false"
						>Đảo Chuỗi</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-7"
						data-mdb-toggle="tab"
						href="#ex1-tabs-7"
						role="tab"
						aria-controls="ex1-tabs-7"
						aria-selected="false"
						>Tìm và Thay Thế</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-8"
						data-mdb-toggle="tab"
						href="#ex1-tabs-8"
						role="tab"
						aria-controls="ex1-tabs-8"
						aria-selected="false"
						>Lọc nội dung</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-9"
						data-mdb-toggle="tab"
						href="#ex1-tabs-9"
						role="tab"
						aria-controls="ex1-tabs-9"
						aria-selected="false"
						>Cắt / Giữ Dòng Theo Ý</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-10"
						data-mdb-toggle="tab"
						href="#ex1-tabs-10"
						role="tab"
						aria-controls="ex1-tabs-10"
						aria-selected="false"
						>Cookie</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-11"
						data-mdb-toggle="tab"
						href="#ex1-tabs-11"
						role="tab"
						aria-controls="ex1-tabs-11"
						aria-selected="false"
						>Cắt Line</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-12"
						data-mdb-toggle="tab"
						href="#ex1-tabs-12"
						role="tab"
						aria-controls="ex1-tabs-12"
						aria-selected="false"
						>Trùng lặp</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-13"
						data-mdb-toggle="tab"
						href="#ex1-tabs-13"
						role="tab"
						aria-controls="ex1-tabs-13"
						aria-selected="false"
						>Đảo từ</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-14"
						data-mdb-toggle="tab"
						href="#ex1-tabs-14"
						role="tab"
						aria-controls="ex1-tabs-14"
						aria-selected="false"
						>Lọc chữ</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-15"
						data-mdb-toggle="tab"
						href="#ex1-tabs-15"
						role="tab"
						aria-controls="ex1-tabs-15"
						aria-selected="false"
						>Copy file</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-16"
						data-mdb-toggle="tab"
						href="#ex1-tabs-16"
						role="tab"
						aria-controls="ex1-tabs-16"
						aria-selected="false"
						>Ảnh html</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-17"
						data-mdb-toggle="tab"
						href="#ex1-tabs-17"
						role="tab"
						aria-controls="ex1-tabs-17"
						aria-selected="false"
						>Link html</a
						>
					</li>

					
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-19"
						data-mdb-toggle="tab"
						href="#ex1-tabs-19"
						role="tab"
						aria-controls="ex1-tabs-19"
						aria-selected="false"
						>Ghép file</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-20"
						data-mdb-toggle="tab"
						href="#ex1-tabs-20"
						role="tab"
						aria-controls="ex1-tabs-20"
						aria-selected="false"
						>JSON</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-21"
						data-mdb-toggle="tab"
						href="#ex1-tabs-21"
						role="tab"
						aria-controls="ex1-tabs-21"
						aria-selected="false"
						>Lọc tag</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="ex1-tab-22"
						data-mdb-toggle="tab"
						href="#ex1-tabs-22"
						role="tab"
						aria-controls="ex1-tabs-22"
						aria-selected="false"
						>Tính Sub</a
						>
					</li>
					</ul>
					<!-- Tabs navs -->

					<!-- Tabs content -->
					<div class="tab-content cut_string" id="ex1-content">
					<div
						class="tab-pane fade show active"
						id="ex1-tabs-1"
						role="tabpanel"
						aria-labelledby="ex1-tab-1"
					>
					<div class="form-check checked_class">
						<input class="form-check-input flexCheckChecked" type="checkbox" value="" id="flexCheckChecked" />
						<label class="form-check-label" for="flexCheckChecked">Loại bỏ trùng lặp?</label>
					</div>
					<p style="margin:0; font-size:14px">Nội dung</p>
					<textarea id="twofa" class="" placeholder="AAAAAA|user1|xxxx
BBBBB|user2|yyyyy" require>DAAAAE....|user1|pass1
DAAAAG....|user2|pass2
DAAAAH....|user3|pass3
DAAAAG....|user2|pass24</textarea>
					<div class="filter">
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputEmail4">Ký tự ngăn cách</label>
							<input type="text"  value="|" class="form-control kitungangcach" id="inputEmail4" placeholder="|">
							</div>
							<div class="form-group col-md-6">
							<label for="inputPassword4">Bỏ qua vị trí số</label>
							<input type="number" value="" class="form-control boqua" id="inputnumber4" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputEmail4">Vị trí bắt đầu cắt</label>
							<input type="number" value="1" class="form-control batdau" id="inputEmail4" placeholder="1">
							</div>
							<div class="form-group col-md-6">
							<label for="inputPassword4">Cắt đến vị trí số</label>
							<input type="number" value="1" class="form-control denvitri" id="inputnumber4" >
							</div>
						</div>
						
					</div>

					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					thực hiện cắt
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>

					</div>
					<div class="tab-pane fade insert_string" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
						<div class="form-check checked_class">
							<input class="form-check-input flexCheckChecked" type="checkbox" value="" id="flexCheckChecked" />
							<label class="form-check-label" for="flexCheckChecked">Loại bỏ trùng lặp?</label>
						</div>
					<p style="margin:0; font-size:14px">Nội dung</p>
					<textarea id="twofa" class="" placeholder="AAAAAA|user1|xxxx
BBBBB|user2|yyyyy" require>DAAAAE....|user1|pass1
DAAAAG....|user2|pass2
DAAAAH....|user3|pass3
DAAAAG....|user2|pass24</textarea>
					<div class="filter">

						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputEmail4">Chuỗi Chèn vào đầu dòng</label>
							<input type="text" value="START" class="form-control batdau" id="inputEmail4" placeholder="START">
							</div>
							<div class="form-group col-md-6">
							<label for="inputPassword4">Chuỗi Chèn vào cuối dòng</label>
							<input type="text" value="END" class="form-control ketthuc" id="inputnumber4" placeholder="END" >
							</div>
						</div>
						
					</div>
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					thực hiện chèn
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>

					</div>
					<div class="tab-pane fade graft" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
						<div class="form-check checked_class">
							<input class="form-check-input flexCheckChecked" type="checkbox" value="" id="flexCheckChecked" />
							<label class="form-check-label" for="flexCheckChecked">Loại bỏ trùng lặp?</label>
						</div>
						<p style="margin:0; font-size:14px">Mode</p>
						<select class="form-select mode" aria-label="Mode">
						<option value="0" selected>Tất cả dòng</option>
						<option value="1">Liên tiếp</option>
						</select>
					<p style="margin:0; font-size:14px">Nội dung</p>
					<textarea id="twofa" class="" placeholder="AAAAAA|user1|xxxx
BBBBB|user2|yyyyy" require>DAAAAE....|user1|pass1
DAAAAG....|user2|pass2
DAAAAH....|user3|pass3
DAAAAG....|user2|pass24</textarea>
					<div class="filter">

						<div class="form-row">
							<div class="form-group col-md-12">
							<label for="inputEmail4">Ngăn cách bởi ký tự</label>
							<input type="text" value="|" class="form-control ngancach" id="inputEmail4" placeholder="|">
							</div>
						</div>
						
					</div>
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					thực hiện ghép dòng
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>



					</div>
					<div class="tab-pane fade filter_string" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
						<p style="margin:0; font-size:14px">Nội dung</p>
					<textarea id="twofa" class="" placeholder="AAAAAA|user1|xxxx
BBBBB|user2|yyyyy" require>DAAAAE....|user1|pass1
DAAAAG....|user2|pass2
DAAAAH....|user3|pass3
DAAAAG....|user2|pass2</textarea>
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					thực hiện lọc trùng
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>

					</div>
					<div class="tab-pane fade" id="ex1-tabs-5" role="tabpanel" aria-labelledby="ex1-tab-5">
						Tab 5 content
					</div>
					<div class="tab-pane fade random_string" id="ex1-tabs-6" role="tabpanel" aria-labelledby="ex1-tab-6">
					<div class="form-check checked_class">
							<input class="form-check-input flexCheckChecked" type="checkbox" value="" id="flexCheckChecked" />
							<label class="form-check-label" for="flexCheckChecked">Loại bỏ trùng lặp?</label>
						</div>
						
					<p style="margin:0; font-size:14px">Nội dung</p>
					<textarea id="twofa" class="" placeholder="AAAAAA|user1|xxxx
BBBBB|user2|yyyyy" require>DAAAAE....|user1|pass1
DAAAAG....|user2|pass2
DAAAAH....|user3|pass3
DAAAAG....|user2|pass24</textarea>
					<div class="filter">

						<div class="form-row">
							<div class="form-group col-md-12">
							<label for="inputEmail4">Ngăn cách bởi ký tự</label>
							<input type="text" value="|" class="form-control ngancach" id="inputEmail4" placeholder="|">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputEmail4">Từ vị trí số</label>
							<input type="number" value="1" class="form-control start" id="inputEmail4" placeholder="|">
							</div>
							<div class="form-group col-md-6">
							<label for="inputEmail4">Đổi qua vị trí số</label>
							<input type="number" value="1" class="form-control end" id="inputEmail4" placeholder="|">
							</div>
						</div>
						
					</div>
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					thực hiện đảo chuỗi
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>



					</div>
					<div class="tab-pane fade search_string" id="ex1-tabs-7" role="tabpanel" aria-labelledby="ex1-tab-7">
						<div class="form-check checked_class">
							<input class="form-check-input flexCheckChecked" type="checkbox" value="" id="flexCheckChecked" />
							<label class="form-check-label" for="flexCheckChecked">Không phân biệt chữ hoa chữ thường?</label>
						</div>
						
						<p style="margin:0; font-size:14px">Nội dung</p>
						<textarea id="twofa" class="" placeholder="AAAAAA|user1|xxxx
BBBBB|user2|yyyyy" require>Nội dung</textarea>
						<div class="filter">

						
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputEmail4">Nhập nội dung muốn tìm thay thế</label>
							<input type="text" value="a" class="form-control search_key" id="inputEmail4" placeholder="Ký tự">
							</div>
							<div class="form-group col-md-6">
							<label for="inputEmail4">Thay thế thành</label>
							<input type="text" value="c" class="form-control replate" id="inputEmail4" placeholder="Thay thế">
							</div>
						</div>
						
						</div>
						<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
						<i class="uil uil-process"></i>
						thực hiện thay thế
						</a>
						<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<div class="tab-pane fade filter_content" id="ex1-tabs-8" role="tabpanel" aria-labelledby="ex1-tab-8">
					
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputEmail4">Nội dung gốc</label>
								<textarea  class="" style="height:200px" placeholder="" require></textarea>
							</div>
							<div class="form-group col-md-6">
								<label for="inputEmail4">Nội dung muốn loại bỏ</label>
								<textarea  class="filter_tx" style="height:200px" placeholder="" require></textarea>
							</div>
						</div>	
						
						<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
						<i class="uil uil-process"></i>
						thực hiện thay thế
						</a>
						<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<div class="tab-pane fade end_tab" id="ex1-tabs-9" role="tabpanel" aria-labelledby="ex1-tab-9">
						<div class="form-check checked_class">
							<input class="form-check-input flexCheckChecked" type="checkbox" value="" id="flexCheckChecked" />
							<label class="form-check-label" for="flexCheckChecked">Không phân biệt chữ hoa chữ thường?</label>
						</div>
						
					<p style="margin:0; font-size:14px">Nội dung...</p>
					<textarea id="twofa" class="" placeholder="AAAAAA|user1|xxxx
BBBBB|user2|yyyyy" require></textarea>
					<div class="filter">

						
						<div class="form-row">
							<div class="form-group col-md-12">
							<label for="inputEmail4">Từ Khoá Dòng muốn Giữ lại</label>
							<input type="text" class="form-control giu" id="inputEmail4" placeholder="Nội dung từ khóa muốn giữ lại...">
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							<label for="inputEmail4">Từ Khoá Dòng muốn Loại bỏ</label>
							<input type="text" class="form-control xoa" id="inputEmail4" placeholder="Nội dung từ khóa muốn loại bỏ...">
							</div>
							
						</div>

						
					</div>
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					thực hiện cắt / giữ
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- Start tab -->
					<div class="tab-pane fade cookie" id="ex1-tabs-10" role="tabpanel" aria-labelledby="ex1-tab-10">
						<div class="form-check checked_class">
							<input class="form-check-input flexCheckChecked" type="checkbox" value="" id="flexCheckChecked" />
							<label class="form-check-label" for="flexCheckChecked">Loại bỏ trùng lặp?</label>
						</div>
						<ul class="nav nav-tabs mb-3" id="ex2" role="tablist">
							<li class="nav-item" role="presentation">
								<a
								class="nav-link active"
								id="ex1-10-1"
								data-mdb-toggle="tab"
								href="#ex1-tabs-10-1"
								role="tab"
								aria-controls="ex1-tabs-10-1"
								aria-selected="true"
								>Lấy UID từ Cookie</a
								>
							</li>
							<li class="nav-item" role="presentation">
								<a
								class="nav-link "
								id="ex1-10-2"
								data-mdb-toggle="tab"
								href="#ex1-tabs-10-2"
								role="tab"
								aria-controls="ex1-tabs-10-2"
								aria-selected="false"
								>Sắp xếp cookie theo UID</a
								>
							</li>
							<li class="nav-item" role="presentation">
								<a
								class="nav-link "
								id="ex1-10-3"
								data-mdb-toggle="tab"
								href="#ex1-tabs-10-3"
								role="tab"
								aria-controls="ex1-tabs-10-3"
								aria-selected="false"
								>Sắp xếp UID</a
								>
							</li>
							<li class="nav-item" role="presentation">
								<a
								class="nav-link "
								id="ex1-10-4"
								data-mdb-toggle="tab"
								href="#ex1-tabs-10-4"
								role="tab"
								aria-controls="ex1-tabs-10-4"
								aria-selected="false"
								>Bỏ Cookie trong acc</a
								>
							</li>
							<li class="nav-item" role="presentation">
								<a
								class="nav-link "
								id="ex1-10-5"
								data-mdb-toggle="tab"
								href="#ex1-tabs-10-5"
								role="tab"
								aria-controls="ex1-tabs-10-5"
								aria-selected="false"
								>Tách token</a
								>
							</li>
							


						</ul>
						<div class="tab-content cut_string" id="ex1-content">
						<!-- Start tab child  -->
						<div class="tab-pane fade fade show active cookie_get_uid" id="ex1-tabs-10-1" role="tabpanel" aria-labelledby="ex1-tab-10-1">
						<select class="form-select w-25 sort" aria-label="Default select example">
							<option value="0" selected>Không sắp xếp</option>
							<option value="1">A->Z</option>
							<option value="2">Z->A</option>
						</select>
						<p style="margin:0; font-size:14px">Nội dung...</p>
						<textarea id="twofa" class="" placeholder="c_user=123;xs=xxx;sb=xxx;datr=xxx
c_user=289;xs=yyy;sb=yyy;datr=yyy" require>c_user=123;xs=xxx;sb=xxx;datr=xxx
c_user=289;xs=yyy;sb=yyy;datr=yyy</textarea>
						<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
							<i class="uil uil-process"></i>
							thực hiện lấy UID
						</a>
						<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
						</div>
						<!--  end child  -->

						<!-- Start tab child  -->
						<div class="tab-pane fade sort-by-uid" id="ex1-tabs-10-2" role="tabpanel" aria-labelledby="ex1-tab-10-2">
							<select class="form-select w-25 sort" aria-label="Default select example">
								<option value="0" selected>Không sắp xếp</option>
								<option value="1">A->Z</option>
								<option value="2">Z->A</option>
							</select>
							<p style="margin:0; font-size:14px">Nội dung...</p>
							<textarea id="twofa" class="" placeholder="c_user=123;xs=xxx;sb=xxx;datr=xxx
c_user=289;xs=yyy;sb=yyy;datr=yyy" require>c_user=123;xs=xxx;sb=xxx;datr=xxx
c_user=289;xs=yyy;sb=yyy;datr=yyy</textarea>
							<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
								<i class="uil uil-process"></i>
								thực hiện sắp xếp theo UID
							</a>
							<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
						</div>
						<!--  end child  -->
						<!-- Start tab child  -->
						<div class="tab-pane fade sort-uid" id="ex1-tabs-10-3" role="tabpanel" aria-labelledby="ex1-tab-10-3">
							<select class="form-select w-25 sort" aria-label="Default select example">
								<option value="0" selected>Không sắp xếp</option>
								<option value="1">A->Z</option>
								<option value="2">Z->A</option>
							</select>
							<p style="margin:0; font-size:14px">Nội dung...</p>
							<textarea id="twofa" class="" placeholder="1020302302
1230222222
1500232300" require>1230222222
1020302302
1500232300</textarea>
							<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
								<i class="uil uil-process"></i>
								thực hiện sắp xếp UID
							</a>
							<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
						</div>
						<!--  end child  -->
						<!-- Start tab child  -->
						<div class="tab-pane fade delete-cookie" id="ex1-tabs-10-4" role="tabpanel" aria-labelledby="ex1-tab-10-4">
							<select class="form-select w-25 sort" aria-label="Default select example">
								<option value="0" selected>Không sắp xếp</option>
								<option value="1">A->Z</option>
								<option value="2">Z->A</option>
							</select>
							<p style="margin:0; font-size:14px">Nội dung...</p>
							<textarea id="twofa" style="font-size:14px" class="" placeholder="100094222752|dsfggbnbvcswdefdr|c_user=100094222752; xs=42:V8zCOSfRrfLY1g:2:1689962335:-1:-1; fr=0Ww1mqF2PXuEBS4tP.AWUAj4jb-xjbPt82ytZve-M2UZM.Bkusde.fz.AAA.0.0.Bk6Z1e.AWUv5dsOx_Q; datr=18a6ZIFWgEeCLnZBTJFVVrkV; m_page_voice=100094637215975; sb=W53pZJa18HpgIXyc5YBg1W5J; useragent=TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzg2LjAuMTY2NS43MCBTYWZhcmkvNTM3LjM2|token|xxxx@hotmail.com|xxxxx|16/Th7/1998|28 08" require>100094222752|dsfggbnbvcswdefdr|c_user=100094222752; xs=42:V8zCOSfRrfLY1g:2:1689962335:-1:-1; fr=0Ww1mqF2PXuEBS4tP.AWUAj4jb-xjbPt82ytZve-M2UZM.Bkusde.fz.AAA.0.0.Bk6Z1e.AWUv5dsOx_Q; datr=18a6ZIFWgEeCLnZBTJFVVrkV; m_page_voice=100094637215975; sb=W53pZJa18HpgIXyc5YBg1W5J; useragent=TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzg2LjAuMTY2NS43MCBTYWZhcmkvNTM3LjM2|token|xxxx@hotmail.com|xxxxx|16/Th7/1998|28 08</textarea>
							<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
								<i class="uil uil-process"></i>
								LOẠI bỏ cookie
							</a>
							<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
						</div>
						<!--  end child  -->
						<!-- Start tab child  -->
						<div class="tab-pane fade get-token" id="ex1-tabs-10-5" role="tabpanel" aria-labelledby="ex1-tab-10-5">
							<select class="form-select w-25 sort" aria-label="Default select example">
								<option value="0" selected>Không sắp xếp</option>
								<option value="1">A->Z</option>
								<option value="2">Z->A</option>
							</select>
							<p style="margin:0; font-size:14px">Nội dung...</p>
							<textarea id="twofa" style="font-size:14px" class="" placeholder="100094222752|dsfggbnbvcswdefdr|c_user=100094222752; xs=42:V8zCOSfRrfLY1g:2:1689962335:-1:-1; fr=0Ww1mqF2PXuEBS4tP.AWUAj4jb-xjbPt82ytZve-M2UZM.Bkusde.fz.AAA.0.0.Bk6Z1e.AWUv5dsOx_Q; datr=18a6ZIFWgEeCLnZBTJFVVrkV; m_page_voice=100094637215975; sb=W53pZJa18HpgIXyc5YBg1W5J; useragent=TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzg2LjAuMTY2NS43MCBTYWZhcmkvNTM3LjM2|token|xxxx@hotmail.com|xxxxx|16/Th7/1998|28 08" require>100094222752|dsfggbnbvcswdefdr|c_user=100094222752; xs=42:V8zCOSfRrfLY1g:2:1689962335:-1:-1; fr=0Ww1mqF2PXuEBS4tP.AWUAj4jb-xjbPt82ytZve-M2UZM.Bkusde.fz.AAA.0.0.Bk6Z1e.AWUv5dsOx_Q; datr=18a6ZIFWgEeCLnZBTJFVVrkV; m_page_voice=100094637215975; sb=W53pZJa18HpgIXyc5YBg1W5J; useragent=TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzg2LjAuMTY2NS43MCBTYWZhcmkvNTM3LjM2|token|xxxx@hotmail.com|xxxxx|16/Th7/1998|28 08</textarea>
							<div class="filter">
								<div class="form-row">
									<div class="form-group col-md-12">
									<label for="inputEmail4">Vị trí token</label>
									<input type="text" class="form-control vitri" id="inputEmail4" placeholder="1">
									</div>
								</div>
							</div>
							<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
								<i class="uil uil-process"></i>
								LẤY TOKEN
							</a>
							<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
						</div>
						<!--  end child  -->

						
						</div>
					</div>
					<!-- End tab -->

					<!-- Start Tab -->
					<div class="tab-pane fade cut-line" id="ex1-tabs-11" role="tabpanel" aria-labelledby="ex1-tab-11">
						
					<p style="margin:0; font-size:14px">Nội dung...</p>
					<textarea id="twofa" class="" placeholder="DAAAAE....|user1|pass1
DAAAAG....|user2|pass2
DAAAAH....|user3|pass3
" require></textarea>
					<div class="filter">

						<div class="form-row">
							<div class="form-group col-md-12">
							<label for="inputEmail4">Số dòng muốn cắt</label>
							<input type="text" class="form-control vitri" id="inputEmail4" placeholder="Cắt đến dòng">
							</div>
							
						</div>
						
					</div>
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					thực hiện cắt
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- EndTab -->
					<!-- Start Tab -->
					<div class="tab-pane fade trung-lap" id="ex1-tabs-12" role="tabpanel" aria-labelledby="ex1-tab-12">
						
					<p style="margin:0; font-size:14px">Nội dung...</p>
					<textarea id="twofa" class="" placeholder="DAAAAE....|user1|pass1
DAAAAG....|user2|pass2
DAAAAH....|user1|pass1
" require></textarea>
					
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					thực hiện bỏ trùng lặp
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- EndTab -->
					<!-- Start Tab -->
					<div class="tab-pane fade daotu" id="ex1-tabs-13" role="tabpanel" aria-labelledby="ex1-tab-13">
						
					<p style="margin:0; font-size:14px">Nội dung...</p>
					<textarea id="twofa" class="" placeholder="a
b
c
" require></textarea>
					
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					ĐẢO TỪ
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- EndTab -->		
					<!-- Start Tab -->
					<div class="tab-pane fade locchu" id="ex1-tabs-14" role="tabpanel" aria-labelledby="ex1-tab-14">
						
					<p style="margin:0; font-size:14px">Nội dung...</p>
					<textarea id="twofa" class="" placeholder="sb=Bdi-ue_fQZ; datr=BgVm_eecFso; c_user=100003266100440; xs=32%3AiwE4eOw%3A2%3A183%3A8676%3A81; pl=n; m_pixel_ratio=1;" require>sb=Bdi-ue_fQZ; datr=BgVm_eecFso; c_user=100003266100440; xs=32%3AiwE4eOw%3A2%3A183%3A8676%3A81; pl=n; m_pixel_ratio=1;</textarea>
<div class="filter">

					<div class="form-row">
						<div class="form-group col-md-6">
						<label for="inputEmail4">Bắt đầu</label>
						<input type="text" class="form-control start" id="inputEmail4" placeholder="c_user" value ="c_user">
						</div>
						<div class="form-group col-md-6">
						<label for="inputEmail4">Kết thúc</label>
						<input type="text" class="form-control end" id="inputEmail4" placeholder=";" value=";">
						</div>
						<select class="form-select mode w-25 mb-2 ml-1" aria-label="Mode">
						<option value="0" selected>Loại bỏ</option>
						<option value="1">Giữ lại</option>
						</select>
					</div>

					</div>
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					ĐẢO TỪ
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- EndTab -->		

					<!-- Start Tab -->
					<div class="tab-pane fade copyfile" id="ex1-tabs-15" role="tabpanel" aria-labelledby="ex1-tab-15">
						
					<p style="margin:0; font-size:14px">Nội dung...</p>
					<textarea id="twofa" class="" placeholder="a
b
c
" require></textarea>
					<div class="filter">

					<div class="form-row">
						<div class="form-group col-md-6">
						<label for="inputEmail4">Bắt đầu</label>
						<input type="number" class="form-control start" id="inputEmail4" placeholder="1">
						</div>
						<div class="form-group col-md-6">
						<label for="inputEmail4">Kết thúc</label>
						<input type="number" class="form-control end" id="inputEmail4" placeholder="200">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
						<label for="inputEmail4">Tên file</label>
						<input type="text" class="form-control name" id="inputEmail4" placeholder="abc">
						</div>
						<div class="form-group col-md-6">
						<label for="inputEmail4">Đuôi file</label>
						<input type="text" class="form-control dot" id="inputEmail4" placeholder="xyz">
						</div>
					</div>

					</div>
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					COPY FILE
					</a>
					</div>
					<!-- EndTab -->	
					<!-- Start Tab -->
					<div class="tab-pane fade cut-line" id="ex1-tabs-11" role="tabpanel" aria-labelledby="ex1-tab-11">
						
					<p style="margin:0; font-size:14px">Nội dung...</p>
					<textarea id="twofa" class="" placeholder="DAAAAE....|user1|pass1
DAAAAG....|user2|pass2
DAAAAH....|user3|pass3
" require></textarea>
					<div class="filter">

						<div class="form-row">
							<div class="form-group col-md-12">
							<label for="inputEmail4">Số dòng muốn cắt</label>
							<input type="text" class="form-control vitri" id="inputEmail4" placeholder="Cắt đến dòng">
							</div>
							
						</div>
						
					</div>
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					thực hiện cắt
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- EndTab -->
					<!-- Start Tab -->
					<div class="tab-pane fade trung-lap" id="ex1-tabs-12" role="tabpanel" aria-labelledby="ex1-tab-12">
						
					<p style="margin:0; font-size:14px">Nội dung...</p>
					<textarea id="twofa" class="" placeholder="DAAAAE....|user1|pass1
DAAAAG....|user2|pass2
DAAAAH....|user1|pass1
" require></textarea>
					
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					thực hiện bỏ trùng lặp
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- EndTab -->
					<!-- Start Tab -->
					<div class="tab-pane fade anhhtml" id="ex1-tabs-16" role="tabpanel" aria-labelledby="ex1-tab-16">
					<p style="margin:0; font-size:14px">Link lấy ảnh</p>
					<input placeholder="Link lấy ảnh" value='http://i.imgur.com' class="w-100 mb-2"/>
					<p style="margin:0; font-size:14px">Nội dung...</p>
					<textarea id="twofa" class="" placeholder="a
b
c
" require><img src='http://i.imgur.com/l35eOVBb.jpg'/>
<img src='/KBWh5jOb.jpg'/>
</textarea>
					
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					XỬ LÝ
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- EndTab -->				
					<!-- Start Tab -->
					<div class="tab-pane fade linkhtml" id="ex1-tabs-17" role="tabpanel" aria-labelledby="ex1-tab-17">
					<p style="margin:0; font-size:14px">Link web</p>
					<input placeholder="Link web" value='http://google.com' class="w-100 mb-2"/>
					<p style="margin:0; font-size:14px">Nội dung...</p>
					<textarea id="twofa" class="" placeholder="<a href='http://google.com/1.html'>1.html</a>
<a href='/2.html'>2.html</a>

" require><a href='http://google.com/1.html'>1.html</a>
<a href='/2.html'>2.html</a>

</textarea>
					
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					XỬ LÝ
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- EndTab -->	
					
<!-- Start Tab -->
<div class="tab-pane fade ghepfile" id="ex1-tabs-19" role="tabpanel" aria-labelledby="ex1-tab-19">
					<p style="margin:0; font-size:14px">Nội dung 1</p>
					<textarea id="twofa" class="mb-2" placeholder="a
b
c
" require>1
2
3
</textarea>
					<p style="margin:0; font-size:14px">Nội dung 2</p>
					<textarea id="twofa" class="" placeholder="a
b
c
" require>a
b
c
</textarea>
					<div class="filter">

					<div class="form-row">
						<div class="form-group col-md-12">
						<label for="inputEmail4">Ngăn cách</label>
						<input type="text" class="form-control ngancach" id="inputEmail4" placeholder="|">
						</div>
					</div>

					</div>
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					XỬ LÝ
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- EndTab -->	
					<!-- Start Tab -->
<div class="tab-pane fade tinhsub" id="ex1-tabs-22" role="tabpanel" aria-labelledby="ex1-tab-22">
					<p style="margin:0; font-size:14px">Nội dung 1</p>
					<textarea id="twofa" class="mb-2" placeholder="
" require>1000216061632322|2078|11000</textarea>
					<p style="margin:0; font-size:14px">Nội dung 2</p>
					<textarea id="twofa" class="" placeholder="
" require>1000216061632322|12000
</textarea>
					<div class="filter">

					<div class="form-row">
						<div class="form-group col-md-12">
						<label for="inputEmail4">Ngăn cách</label>
						<input type="text" class="form-control ngancach" id="inputEmail4" placeholder="|">
						</div>
					</div>

					</div>
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					XỬ LÝ
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- EndTab -->	
										<!-- Start Tab -->
										<div class="tab-pane fade json" id="ex1-tabs-20" role="tabpanel" aria-labelledby="ex1-tab-20">
					<p style="margin:0; font-size:14px">Nội dung...</p>
					<textarea id="twofa" class="" placeholder="
JSON
" require>[
  {
    "domain": ".facebook.com",
    "hostOnly": false,
    "httpOnly": false,
    "name": "act",
    "path": "/",    "sameSite": "no_restriction",
    "secure": false,
    "session": true,
    "storeId": "0",
    "value": "323235353533",
    "id": 1
 }
]

</textarea>
					
					<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
					<i class="uil uil-process"></i>
					XỬ LÝ
					</a>
					<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
					</div>
					<!-- EndTab -->	
					
					

	<!-- Start Tab -->
	<div class="tab-pane fade loctag" id="ex1-tabs-21" role="tabpanel" aria-labelledby="ex1-tab-21">
						
						<p style="margin:0; font-size:14px">Nội dung...</p>
						<textarea id="twofa" class="" placeholder="
	" require>[IMG]http://www.use.com/images/s_1/ff4aa1e27bbfa78b04d1_2.jpg[/IMG]</textarea>
							<div class="filter">

						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputEmail4">Mở tag</label>
							<input type="text" class="form-control start" id="inputEmail4" placeholder="[IMG]" value="[IMG]">
							</div>
							<div class="form-group col-md-6">
							<label for="inputEmail4">Đóng tag</label>
							<input type="text" class="form-control end" id="inputEmail4" placeholder="[/IMG]" value="[/IMG]">
							</div>
							
						</div>

						</div>
						<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
						<i class="uil uil-process"></i>
						thực hiện bỏ trùng lặp
						</a>
						<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
						</div>
						<!-- EndTab -->
						<!-- Start Tab -->
	<div class="tab-pane fade loctag" id="ex1-tabs-24" role="tabpanel" aria-labelledby="ex1-tab-24">
						
						<p style="margin:0; font-size:14px">Nội dung...</p>
						<textarea id="twofa" class="" placeholder="
	" require>[IMG]http://www.use.com/images/s_1/ff4aa1e27bbfa78b04d1_2.jpg[/IMG]</textarea>
							<div class="filter">

						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputEmail4">Mở tag</label>
							<input type="text" class="form-control start" id="inputEmail4" placeholder="[IMG]" value="[IMG]">
							</div>
							<div class="form-group col-md-6">
							<label for="inputEmail4">Đóng tag</label>
							<input type="text" class="form-control end" id="inputEmail4" placeholder="[/IMG]" value="[/IMG]">
							</div>
							
						</div>

						</div>
						<a class="btn text-white process" style="background-color: #0E4BF1; width:100%" href="#!" role="button">
						<i class="uil uil-process"></i>
						thực hiện bỏ trùng lặp
						</a>
						<textarea readonly class="rs_textarea" style="height:300px" placeholder="" require></textarea>
						</div>
						<!-- EndTab -->














					</div>
					

					<!-- Tabs content -->


				</div>
			</div>
        </div>
    </section>
	<?php

include("./footer.inc.php")

?>

<script src="/assets/main/script_tool.js"></script>
