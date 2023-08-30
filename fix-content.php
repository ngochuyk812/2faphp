<?php
$active_menu = "fixContent";
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
            <div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-primary">
								<div class="panel-heading bg-primary">
									<label style="float: center;"> Tool Lách content Vi phạm chính sách</label>
								</div>
								<!DOCTYPE html>
								<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
									<title>Tool Lách Content Không vi phạm chính sách Facebook Ads (Copy đoạn text cần lách vào ô bên trái, sẽ ra text lách ở ô bên phải,Anh em nhìn thật kỹ mới thấy sự khác biệt được)</title>
									<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
									
									<link href="./convert_files/bootstrap.min.css" rel="stylesheet">
									
									<script type="text/javascript">
										function getCyrillicText(latinText) {
											if (!latinText) {
												return "";
											}
											var cyrText = "";
											for (var i = 0, len = latinText.length; i < len; i++) {
												var curLetter = latinText[i];
												if (curLetter == 'e' || curLetter == 'E') { //prevent pre E, erkin
													if (i == 0 || " -.,\n)('?/".indexOf(latinText[i - 1]) != -1) {
														curLetter += curLetter;
													}
												}
												
												var pos1Txt = latinText[i + 1];
												var pos2Txt = latinText[i + 2];
												
												if (!((curLetter == 'y' || curLetter == 'Y')
												&& (pos2Txt == "'" || pos2Txt == "’" || pos2Txt == "`"))
												&& i != len - 1
												&& !(curLetter == 't' && pos1Txt == 's'
												&& latinText[i + 3] == 'z')) {
													var dualLetter = latCyr[curLetter + pos1Txt];
												if (dualLetter) {
												cyrText += dualLetter;
												i++;
												continue;
												}
												}
												cyrText += latCyr[curLetter] || curLetter;
												}
												return cyrText;
												}
												
												var latCyr = {
												"a":"&#1072;",
												"c":"&#1089;",
												"d":"&#1281;",
												"e":"&#1077;",
												"g":"&#609;",
												"h":"&#1211;",
												"i":"𝗂",
												"j":"&#1112;",
												"l":"&#8572;",
												"o":"&#1086;",
												"p":"&#1088;",
												"q":"&#1307;",
												"s":"&#1109;",
												"T":"&#1058;",
												"w":"&#11379;",
												"x":"&#1093;",
												"y":"&#1091;",
												"A":"&#1040;",
												"C":"&#1057;",
												"D":"𝖣",
												"E":"&#1045;",
												"G":"𝖦",
												"H":"𝖧",
												"I":"𝖨",
												"L":"Ⅼ",
												"O":"&#1054;",
												"P":"&#1056;",
												"Q":"&#1306;",
												"S":"&#1029;",
												"U":"𝖴",
												"V":"𝖵",
												"W":"𝖶",
												"X":"&#1061;",
												"Y":"𝖸",
												"Z":"𝖹",
												"í": "ί",
												"ì": "ὶ",
												"ỉ": "ἰ",
												"ĩ": "ῖ"
												};
												
												function onLatinTextChange(txt) {
												var cyrillicTextareaElem = document.getElementById("cyrillic_textarea");
												var div = document.createElement("div");
												var cyrillicHtmlEntities = getCyrillicText(txt);
												div.innerHTML = cyrillicHtmlEntities;
												cyrillicTextareaElem.value = div.innerText;
												
												}
												
												function select(textareaName) {
												var textareaElem = document.converter_form[textareaName];
												textareaElem.select();
												}
												function clear1(textareaName) {
												var textareaElems = document.getElementsByTagName('textarea');
												for (var n = textareaElems.length, i = 0; i < n; i++)
												textareaElems[i].value = "";
												}
												</script>
												</head>
												<body>
												<div class="container">
												</br>
												</br>
												<h4 class="text-center">Tool Lách Content Không vi phạm chính sách Facebook Ads (Copy đoạn text cần lách vào ô bên trái, sẽ ra text lách ở ô bên phải,Anh em nhìn thật kỹ mới thấy sự khác biệt được)</h4>
												<br>
												<form name="converter_form" onsubmit="return false;">
												<div class="row">
												<div class="col-md-6">
												
												<p class="text-center">
												<button onclick="select(&#39;latin_textarea&#39;)" class="btn btn-primary">Select All
												</button>
												<button onclick="clear1()" class="btn btn-danger">Clear</button>
												</p>
												<textarea id="latin_textarea" autofocus="" class="form-control" placeholder="Content" rows="10" oninput="onLatinTextChange(this.value)"></textarea>
												</div>
												<p class="clearfix visible-xs"></p>
												
												<div class="col-md-6">
												
												<p class="text-center">
												<button onclick="select(&#39;cyrillic_textarea&#39;)" class="btn btn-primary">Select All</button>
												<button onclick="clear1()" class="btn btn-danger">Clear</button>
												</p>
												<textarea readonly="" class="form-control" rows="10" id="cyrillic_textarea">                </textarea>
												</div>
												</div>
												</form>
												</div>
												
												
												</body></html>
												</br>
												</br>
												</br>
												
												<center>
												<iframe src="https://icon.fchat.vn/" name="the-iframe" width="80%" height="950px" frameborder="0"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
												
												</center>

				</div>
			</div>
        </div>
    </section>
												
<?php
include("./footer.inc.php")
?>											
                                                