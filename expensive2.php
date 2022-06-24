<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>小倉庫食研所</title>
	<link rel="stylesheet" type="text/css" href="css/expensive2_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "E201":
         $_SESSION["Name"] = "蔾麥蔬果早餐";
         $_SESSION["Price"] = 355;
         break;
      case "E202":
         $_SESSION["Name"] = "英國女王早餐";
         $_SESSION["Price"] = 365;
         break;
      case "E203":
         $_SESSION["Name"] = "綜合肉起司蛋捲";
         $_SESSION["Price"] = 365;
         break;
      case "E204":
         $_SESSION["Name"] = "黑松露鮮蔬起司蛋捲";
         $_SESSION["Price"] = 365;
         break; 
      case "E205":
         $_SESSION["Name"] = "美國無骨牛小排早餐飯";
         $_SESSION["Price"] = 455;
         break; 
      case "E206":
         $_SESSION["Name"] = "培根起司牛肉堡";
         $_SESSION["Price"] = 325;
         break; 
      case "E207":
         $_SESSION["Name"] = "英式酥炸鱈魚堡";
         $_SESSION["Price"] = 315;
         break; 
      case "E208":
         $_SESSION["Name"] = "松露蕈菇嫩煎雞肉堡";
         $_SESSION["Price"] = 355;
         break; 
      case "E209":
         $_SESSION["Name"] = "夏威夷培根起司牛肉堡";
         $_SESSION["Price"] = 355;
         break;  
      case "E210":
         $_SESSION["Name"] = "鹹蛋苦瓜義大利麵";
         $_SESSION["Price"] = 285;
         break;  
      case "E211":
         $_SESSION["Name"] = "青醬雞肉義大利麵";
         $_SESSION["Price"] = 295;
         break;  
      case "E212":
         $_SESSION["Name"] = "明太子花枝義大利麵";
         $_SESSION["Price"] = 315;
         break;  
      case "E213":
         $_SESSION["Name"] = "酥炸雞翅";
         $_SESSION["Price"] = 270;
         break;  
      case "E214":
         $_SESSION["Name"] = "炸物拼盤";
         $_SESSION["Price"] = 425;
         break;  
      case "E215":
         $_SESSION["Name"] = "酥炸起司條";
         $_SESSION["Price"] = 205;
         break;  
      case "E216":
         $_SESSION["Name"] = "美式薯條(松露/芥末)";
         $_SESSION["Price"] = 170;
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
			<img src="image/expensive2-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>小倉庫食研所</b>
			</span>
			<span class="information2">
				<p>小倉庫食研所可是一家google評價將近滿分的餐廳，早午餐系列餐點為人氣，晚起床品嘗美味的早午餐，讓這一天有個美好的開始。</p>
			</span>
			<span class="information3">
				<p>營業時間：週一至週日10:00~21:00</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-7708-3798">電話：02-7708-3798</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com.tw/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E7%BE%8E%E5%B4%99%E8%A1%9786%E5%B7%B72%E8%99%9F/@25.0969945,121.5191168,17z/data=!3m1!4b1!4m5!3m4!1s0x3442aebc482a6439:0x9122bdfe0dc978a9!8m2!3d25.0969897!4d121.5213055?hl=zh-TW" target="blank">地址：台北市士林區美崙街86巷2號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/expensive2-2.jpg">
				</div>
				<div class="re2">
					<img src="image/expensive2-3.jpg">
				</div>
				<div class="re3">
					<img src="image/expensive2-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>綜合肉起司蛋捲 $365</p>
				</div>
				<div class="rename2">
					<p>青醬雞肉義大利麵 $295</p>
				</div>
				<div class="rename3">
					<p>炸物拼盤 $425</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div>
				<form action="expensive2.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="早午餐">
							<option value="E201">蔾麥蔬果早餐 $355</option>
							<option value="E202">英國女王早餐 $365</option>
							<option value="E203">綜合肉起司蛋捲 $365</option>
							<option value="E204">黑松露鮮蔬起司蛋捲 $365</option>
							<option value="E205">美國無骨牛小排早餐 $455</option>
						</optgroup>
						<optgroup label="漢堡">
							<option value="E206">培根起司牛肉堡 $325</option>
							<optio value="E207">英式酥炸鱈魚堡 $315</option>
							<option value="E208">松露蕈菇嫩煎雞肉堡 $355</option>
							<option value="E209">夏威夷培根起司牛肉堡 $355</option>
						</optgroup>
						<optgroup label="義大利麵">
							<option value="E210">鹹蛋苦瓜義大利麵 $285</option>
							<option value="E211">青醬雞肉義大利麵 $295</option>
							<option value="E212">明太子花枝義大利麵 $315</option>
						</optgroup>
						<optgroup label="點心">
							<option value="E213">酥炸雞翅 $270</option>
							<option value="E214">炸物拼盤 $425</option>
							<option value="E215">酥炸起司條 $205</option>
							<option value="E216">美式薯條(松露/芥末) $170</option>
						</optgroup>
      					<input type="number" name="Quantity" value="1" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;" min="0" max="15">
					</select>
      				<button type="submit" value="訂購" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px; background-color: #f19755;">訂購</button> 
				</form>
			</div>
			<div class="menusrow1">
			</div>
			<div class="menusrow2">
			<div class="submit">
				<!--<button onclick="getElementById('order').style.display ='block'" style="width: auto;" class="mealsubmit">送出</button>-->
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
					<img src="image/people2.jpg" width="20%">
				</div>
				<div class="comment1content">
					<div class="comment1name">
						<p>Jenny</p>
					</div>
					<div class="comment1words">
						<p>飲料能續，如果同桌只有也可以上限續三次，完全抓住消費者的心。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people6.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Anson</p>
					</div>
					<div class="comment2words">
						<p>鮭魚莎拉味道不錯，份量充足，吃到最後不會膩。</p>
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
    <form method="post" action="expensive2.php">
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
					<a href="expensive1.php"><img src="image/expensive1-1.jpg" width="100%">
					<span class="other1name">
						<p>洋蔥牛排</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="expensive3.php"><img src="image/expensive3-1.jpg" width="100%">
					<span class="other1name">
						<p>食尚曼谷</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>