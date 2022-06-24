<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>食尚曼谷</title>
	<link rel="stylesheet" type="text/css" href="css/expensive3_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "E301":
         $_SESSION["Name"] = "兩人吃最浪漫";
         $_SESSION["Price"] = 899;
         break;
      case "E302":
         $_SESSION["Name"] = "四個人吃好熱鬧";
         $_SESSION["Price"] = 1599;
         break;
      case "E303":
         $_SESSION["Name"] = "六個人吃超划算";
         $_SESSION["Price"] = 2499;
         break;
      case "E304":
         $_SESSION["Name"] = "泰酸辣海鮮鍋";
         $_SESSION["Price"] = 160;
         break; 
      case "E305":
         $_SESSION["Name"] = "曼谷椒麻雞飯";
         $_SESSION["Price"] = 180;
         break; 
      case "E306":
         $_SESSION["Name"] = "好綠咖哩椰汁飯";
         $_SESSION["Price"] = 140;
         break; 
      case "E307":
         $_SESSION["Name"] = "好黃咖哩椰汁飯";
         $_SESSION["Price"] = 140;
         break; 
      case "E308":
         $_SESSION["Name"] = "好紅咖哩椰汁飯";
         $_SESSION["Price"] = 140;
         break; 
      case "E309":
         $_SESSION["Name"] = "鹽烤泰國蝦";
         $_SESSION["Price"] = 380;
         break;  
      case "E310":
         $_SESSION["Name"] = "香料爆泰國蝦";
         $_SESSION["Price"] = 380;
         break;  
      case "E311":
         $_SESSION["Name"] = "火爆辣炒花枝";
         $_SESSION["Price"] = 300;
         break;  
      case "E312":
         $_SESSION["Name"] = "火爆辣炒海鮮";
         $_SESSION["Price"] = 300;
         break;  
      case "E313":
         $_SESSION["Name"] = "泰式奶茶";
         $_SESSION["Price"] = 120;
         break;  
      case "E314":
         $_SESSION["Name"] = "蜂蜜香茅茶";
         $_SESSION["Price"] = 120;
         break;  
      case "E315":
         $_SESSION["Name"] = "柚子香茅茶";
         $_SESSION["Price"] = 120;
         break;      
      case "E316":
         $_SESSION["Name"] = "蜂蜜檸檬香綠茶";
         $_SESSION["Price"] = 120;
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
			<img src="image/expensive3-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>食尚曼谷</b>
			</span>
			<span class="information2">
				<p>食尚曼谷是家高檔的泰式料理餐廳，店內裝潢華麗，泰國蝦系列餐點有很多吃法，另外有小資族套餐可以選擇。</p>
			</span>
			<span class="information3">
				<p>營業時間：週一至週日17:00~23:00</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2883-0013">電話：02-2883-0013</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com.tw/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E5%A4%A7%E6%9D%B1%E8%B7%AF54%E8%99%9F/@25.0897548,121.5232903,17z/data=!3m1!4b1!4m5!3m4!1s0x3442aebab5192501:0x567b5d205b2c3d5b!8m2!3d25.08975!4d121.525479?hl=zh-TW" target="blank">地址：台北市士林區大東路54號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/expensive3-2.jpg">
				</div>
				<div class="re2">
					<img src="image/expensive3-3.jpg">
				</div>
				<div class="re3">
					<img src="image/expensive3-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>香料爆泰國蝦 $380</p>
				</div>
				<div class="rename2">
					<p>月亮蝦餅 $300</p>
				</div>
				<div class="rename3">
					<p>好綠咖哩椰汁飯 $140</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div>
				<form action="expensive3.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="多人分享餐">
							<option value="E301">兩人吃最浪漫 $899</option>
							<option value="E302">四個人吃好熱鬧 $1599</option>
							<option value="E303">六個人吃超划算 $2499</option>
						</optgroup>
						<optgroup label="主食">
							<option value="E304">泰酸辣海鮮鍋 $160</option>
							<option value="E305">曼谷椒麻雞飯 $180</option>
							<option value="E306">好綠咖哩椰汁飯 $140</option>
							<option value="E307">好黃咖哩椰汁飯 $140</option>
							<option value="E308">好紅咖哩椰汁飯 $140</option>
						</optgroup>
						<optgroup label="海鮮料理">
							<option value="E309">鹽烤泰國蝦 $380</option>
							<option value="E310">香料爆泰國蝦 $380</option>
							<option value="E311">火爆辣炒花枝 $300</option>
							<option value="E312"> $300</option>
						</optgroup>
						<optgroup label="飲料">
							<option value="E313">泰式奶茶 $120</option>
							<option value="E314">蜂蜜香茅茶 $120</option>
							<option value="E315">柚子香茅茶 $120</option>
							<option value="E316">蜂蜜檸檬香綠茶 $</option>
						</optgroup>
						<input type="number" name="Quantity" value="1" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;" min="0" max="15">
					</select>
					<button type="submit" value="訂購" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px; background-color: #f19755;">訂購</button> 
				</form>
			</div>
			<div class="menusrow1">
			</div>
			<div class="menusrow2">
			</div>
			<div class="submit">
	<!--			<button onclick="getElementById('order').style.display ='block'" style="width: auto;" class="mealsubmit">送出</button> -->
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
					<img src="image/people7.jpg" width="20%">
				</div>
				<div class="comment1content">
					<div class="comment1name">
						<p>Ben</p>
					</div>
					<div class="comment1words">
						<p>點了六人套餐，但其實沒有很飽足的感覺，CP值不高。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people5.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Lisa</p>
					</div>
					<div class="comment2words">
						<p>環境改裝老建物，空間蠻舒服的，還有戶外空間。</p>
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
    <form method="post" action="expensive3.php">
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
					<a href="expensive2.php"><img src="image/expensive2-1.jpg" width="100%">
					<span class="other1name">
						<p>小倉庫食研所</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="expensive4.php"><img src="image/expensive4-1.jpg" width="100%">
					<span class="other1name">
						<p>熱浪島南洋蔬食茶堂</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>