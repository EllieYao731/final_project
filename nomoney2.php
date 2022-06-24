<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>包子商行</title>
	<link rel="stylesheet" type="text/css" href="css/nomoney2_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "N201":
         $_SESSION["Name"] = "蔥花捲";
         $_SESSION["Price"] = 20;
         break;
      case "N202":
         $_SESSION["Name"] = "紅豆包";
         $_SESSION["Price"] = 20;
         break;
      case "N203":
         $_SESSION["Name"] = "流沙包";
         $_SESSION["Price"] = 25;
         break;
      case "N204":
         $_SESSION["Name"] = "芝麻包";
         $_SESSION["Price"] = 20;
         break; 
      case "N205":
         $_SESSION["Name"] = "原味肉包";
         $_SESSION["Price"] = 25;
         break; 
      case "N206":
         $_SESSION["Name"] = "辣味肉包";
         $_SESSION["Price"] = 25;
         break; 
      case "N207":
         $_SESSION["Name"] = "蛋黃肉包";
         $_SESSION["Price"] = 30;
         break; 
      case "N208":
         $_SESSION["Name"] = "素香筍包";
         $_SESSION["Price"] = 25;
         break; 
      case "N209":
         $_SESSION["Name"] = "大甲芋泥包";
         $_SESSION["Price"] = 20;
         break;  
      case "N210":
         $_SESSION["Name"] = "生巧克力包";
         $_SESSION["Price"] = 25;
         break;  
      case "N211":
         $_SESSION["Name"] = "香菇蔬菜包";
         $_SESSION["Price"] = 25;
         break;  
      case "N212":
         $_SESSION["Name"] = "起司玉米包";
         $_SESSION["Price"] = 25;
         break;  
      case "N213":
         $_SESSION["Name"] = "黑糖饅頭";
         $_SESSION["Price"] = 15;
         break;  
      case "N214":
         $_SESSION["Name"] = "山東饅頭";
         $_SESSION["Price"] = 15;
         break;  
      case "N215":
         $_SESSION["Name"] = "鮮奶饅頭";
         $_SESSION["Price"] = 20;
         break; 
      case "N216":
         $_SESSION["Name"] = "雜糧饅頭";
         $_SESSION["Price"] = 25;
         break;   
      case "N217":
         $_SESSION["Name"] = "乳酪饅頭";
         $_SESSION["Price"] = 25;
         break;   
      case "N218":
         $_SESSION["Name"] = "芋頭饅頭";
         $_SESSION["Price"] = 25;
         break;
   }  
   header("Location: car_savecart.php");
}
?>
</head>
<body>
	<div class="header">
		<div class="choose">
			<input type="checkbox" id="check">
			<label for="check">
			<a id="btn"><img src="image/choose.jpg" width="22%"></a>
			<a id="cancel">X</a>
			</label>
				<div id="options" class="options">
					<h2>選單</h2>
					<hr size="1px" color=#f2a064>
					<header>想吃什麼類型</header>
					<ul class="nodot">
						<li><a href="chinese.php">中式料理</a></li>
						<li><a href="western.php">西式料理</a></li>
						<li><a href="japanese.php">日式料理</a></li>
						<li><a href="exotic.php">異國料理</a></li>
						<li><a href="coffee.php">咖啡廳</a></li>
					</ul>
					<hr size="1px" color=#f2a064>
					<header>離士林捷運站有多遠</header>
					<ul class="nodot">
						<li><a href="walk1.php">走路5分鐘以內</a></li>
						<li><a href="walk5.php">走路5~20分鐘</a></li>
						<li><a href="walk20.php">走路20分鐘以上</a></li>
					</ul>
					<hr size="1px" color=#f2a064>
					<header>有多少預算呢</header>
					<ul class="nodot">
						<li><a href="norich.php">快沒錢了</a></li>
						<li><a href="rich.php">還可以</a></li>
						<li><a href="veryrich.php">我很有錢</a></li>
					</ul>
				</div>
		</div>
		<div class="logo">
			<a href="HomePage.php"><img src="image/logo.jpg" width="60%"></a>
		</div>
		<span class="h1">
			<a href="#information">店家介紹</a>
		</span>
		<span class="h2">
			<a href="#recommend">推薦餐點</a> 
		</span>
		<span class="h3">
			<a href="#menu">開始訂餐</a> 
		</span>
		<span class="h4">
			<a href="#comment">留言區</a> 
		</span>
		<span class="h5">
			<a href="#othershop">其他店家</a> 
		</span>
		<div class="search">
			<form name = "search" method = "post" 
			action = "foods_search.php">
				<input type="text" id="search" name="search" placeholder="你想吃什麼">
			</form>
		</div>
		<div class="shoppingcar">
			<a href="completebuy.php"><img src="image/shoppingcar.jpg" width="42%"></a>
		</div>
	</div>

	<a name="information">
	<div class="content">
		<div class="photo">
			<img src="image/no_money2-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>包子商行</b>
			</span>
			<span class="information2">
				<p>包子商行賣的包子和饅頭有很多種口味，每一款餡料美味而且很大顆，還有出一些創意口味，店鋪和食品包裝和包子饅頭外型也很精緻，在雙北已有幾家分店。</p>
			</span>
			<span class="information3">
				<p>營業時間：週一至週日6:15~22:00</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2834-6600">電話：02-2834-6600</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E7%BE%8E%E5%B4%99%E8%A1%9712%E8%99%9F/@25.0972299,121.523517,3a,75y,301.6h,90t/data=!3m7!1e1!3m5!1sGq_hBRrIFzqt5t2tcbJCDw!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DGq_hBRrIFzqt5t2tcbJCDw%26cb_client%3Dsearch.gws-prod.gps%26w%3D86%26h%3D86%26yaw%3D301.60242%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192!4m5!3m4!1s0x3442aebd034c69ff:0x4b3d74fdacd0d68e!8m2!3d25.0972803!4d121.5234251" target="blank">地址：台北市士林區美崙街12號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/no_money2-2.jpg">
				</div>
				<div class="re2">
					<img src="image/no_money2-3.jpg">
				</div>
				<div class="re3">
					<img src="image/no_money2-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>素香筍包 $30</p>
				</div>
				<div class="rename2">
					<p>起司玉米包 $30</p>
				</div>
				<div class="rename3">
					<p>辣味肉包 $30</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menus">
				<form action="nomoney2.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="包子">
							<option value="N201">蔥花捲 $20</option>
							<option value="N202">紅豆包 $20</option>
							<option value="N203">流沙包 $25</option>
							<option value="N204">芝麻包 $20</option>
							<option value="N205">原味肉包 $25</option>
							<option value="N206">辣味肉包 $25</option>
							<option value="N207">蛋黃肉包 $30</option>
							<option value="N208">素香筍包 $25</option>
							<option value="N209">大甲芋泥包 $20</option>
							<option value="N210">生巧克力包 $25</option>
							<option value="N211">香菇蔬菜包 $25</option>
							<option value="N212">起司玉米包 $25</option>
						</optgroup>
						<optgroup label="饅頭">
							<option value="N213">黑糖饅頭 $15</option>
							<option value="N214">山東饅頭 $15</option>
							<option value="N215">鮮奶饅頭 $20</option>
							<option value="N216">雜糧饅頭 $25</option>
							<option value="N217">乳酪饅頭 $25</option>
							<option value="N218">芋頭饅頭 $25</option>
						</optgroup>
						<input type="number" name="Quantity" value="1" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;" min="0" max="15">
					</select>
					<button type="submit" value="訂購" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px; background-color: #f19755;">訂購</button> 
				</form>
			</div>
			<div class="submit">
<!--				<button onclick="getElementById('order').style.display ='block'" style="width: auto;" class="mealsubmit">送出</button> -->
				<div id="order" class="orderlist">
						<form class="ordercontent animate" action=".php" method="">
							<div class="whatyouchoose">
								您所選擇的餐點
							</div>
							<div class="meal">
								
							</div>
							<div class="nooryes">
								<button type="button"  onclick="getElementById('order').style.display ='none'" class="cancelbutton">取消</button>
								<button type="submit" class="plusbutton">加入購物車</button>
							</div>
						</form>
					</div>
			</div>
		</div>

		<a name="comment">
		<div class="comment">
			<div class="comments">
				<p>留言區</p>
			</div>
			<div class="comment1">
				<div class="comment1photo">
					<img src="image/people9.jpg" width="20%">
				</div>
				<div class="comment1content">
					<div class="comment1name">
						<p>Kevin</p>
					</div>
					<div class="comment1words">
						<p>包子好吃，價格便宜，豆漿也很大杯，早餐好選擇！</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people4.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Julia</p>
					</div>
					<div class="comment2words">
						<p>麵皮Q彈不會太厚，內餡多，CP值高</p>
					</div>
				</div>	
			</div>
<?php
  if (isset($_POST["comment"])) {
    $comment = $_POST["comment"];
    echo "<div class='comment2'><div class='comment2photo'><img src='image/people2.jpg' width='20%'></div><div class='comment1content'><div class='comment2name'>
      <p>我</p>
     </div>
     <div class='comment2words'>
      <p>".$comment."</p>
     </div>
    </div> 
   </div>";
  }
?>
   <div class="write">
    <form method="post" action="nomoney2.php">
       <input type="text" id="comment" name="comment" placeholder="寫下感想吧···" onclick="comment()">
   <!--    <button type="submit" id="submit" name="submit" class="submit">發佈</button>-->
    </form>
   </div>
  </div>
		
		<a name="othershop">
		<div class="othershop">
			<div class="wanttokonw">
				<p>你可能對這些店家有興趣...</p>
			</div>
			<div class="others">
				<div class="other1">
					<a href="nomoney1.php"><img src="image/no_money1-1.jpg" width="100%">
					<span class="other1name">
						<p>食來運轉</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="nomoney3.php"><img src="image/no_money3-1.jpg" width="100%">
					<span class="other1name">
						<p>老虎醬溫州大餛飩</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>