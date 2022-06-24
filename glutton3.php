<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>越蘭香越南美食</title>
	<link rel="stylesheet" type="text/css" href="css/glutton3_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "G301":
         $_SESSION["Name"] = "海鮮河粉";
         $_SESSION["Price"] = 200;
         break;
      case "G302":
         $_SESSION["Name"] = "生牛肉河粉";
         $_SESSION["Price"] = 200;
         break;
      case "G303":
         $_SESSION["Name"] = "酸辣雞肉河粉";
         $_SESSION["Price"] = 200;
         break;
      case "G304":
         $_SESSION["Name"] = "酸辣豬肉河粉";
         $_SESSION["Price"] = 200;
         break; 
      case "G305":
         $_SESSION["Name"] = "酸辣牛肉河粉";
         $_SESSION["Price"] = 200;
         break; 
      case "G306":
         $_SESSION["Name"] = "乾拌雞肉河粉";
         $_SESSION["Price"] = 200;
         break; 
      case "G307":
         $_SESSION["Name"] = "乾拌豬肉河粉";
         $_SESSION["Price"] = 200;
         break; 
      case "G308":
         $_SESSION["Name"] = "乾拌牛肉河粉";
         $_SESSION["Price"] = 200;
         break; 
      case "G309":
         $_SESSION["Name"] = "蝦仁炒飯";
         $_SESSION["Price"] = 200;
         break;  
      case "G310":
         $_SESSION["Name"] = "越式烤雞腿";
         $_SESSION["Price"] = 200;
         break;  
      case "G311":
         $_SESSION["Name"] = "越式將黃咖哩";
         $_SESSION["Price"] = 200;
         break;  
      case "G312":
         $_SESSION["Name"] = "越式茄汁牛南飯";
         $_SESSION["Price"] = 200;
         break;  
      case "G313":
         $_SESSION["Name"] = "越式將黃咖哩牛肉飯";
         $_SESSION["Price"] = 200;
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
			<img src="image/glutton3-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>越蘭香越南美食</b>
			</span>
			<span class="information2">
				<p>炎炎夏日，不想吃油膩的東西，就來越蘭香品嘗清爽開胃的越式料理，湯頭酸甜清爽的河粉料理最為推薦。</p>
			</span>
			<span class="information3">
				<p>營業時間：週一至週五11:00~21:00</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2883-5558">電話：02-2883-5558</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E5%BE%B7%E8%A1%8C%E6%9D%B1%E8%B7%AF141%E8%99%9F/@25.108169,121.5272031,17z/data=!3m1!4b1!4m5!3m4!1s0x3442ae9b3a744a7b:0x7996d1ea06dcf3e9!8m2!3d25.1081642!4d121.5293918" target="blank">地址：台北市士林區德行東路141號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/glutton3-2.jpg">
				</div>
				<div class="re2">
					<img src="image/glutton3-3.jpg">
				</div>
				<div class="re3">
					<img src="image/glutton3-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>生牛肉河粉 $200</p>
				</div>
				<div class="rename2">
					<p>蝦仁炒飯 $200</p>
				</div>
				<div class="rename3">
					<p>越式薑黃咖喱雞肉飯 $200</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menus">
				<form action="glutton3.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="河粉">
							<option value="G301">海鮮河粉 $200</option>
							<option value="G302">生牛肉河粉 $200</option>
							<option value="G303">酸辣雞肉河粉 $200</option>
							<option value="G304">酸辣豬肉河粉 $200</option>
							<option value="G305">酸辣牛肉河粉 $200</option>
							<option value="G306">乾拌雞肉河粉 $200</option>
							<option value="G307">乾拌豬肉河粉 $200</option>
							<option value="G308">乾拌牛肉河粉 $200</option>
						</optgroup>
						<optgroup label="飯">
							<option value="G309">蝦仁炒飯 $200</option>
							<option value="G310">越式烤雞腿 $200</option>
							<option value="G311">越式將黃咖哩 $200</option>
							<option value="G312">越式茄汁牛南飯 $200</option>
							<option value="G313">越式將黃咖哩牛肉飯 $200</option>
						</optgroup>
						<input type="number" name="Quantity" value="1" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;" min="0" max="15">
					</select>
					<button type="submit" value="訂購" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px; background-color: #f19755;">訂購</button> 
				</form>
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
					<img src="image/people4.jpg" width="20%">
				</div>
				<div class="comment1content">
					<div class="comment1name">
						<p>Tina</p>
					</div>
					<div class="comment1words">
						<p>老闆很客氣，價格便宜，好吃。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people5.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Rex</p>
					</div>
					<div class="comment2words">
						<p>寵物友善店家，加分！</p>
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
    <form method="post" action="glutton3.php">
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
					<a href="glutton2.php"><img src="image/glutton2-1.jpg" width="100%">
					<span class="other1name">
						<p>荷麵亭</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="glutton4.php"><img src="image/glutton4-1.jpg" width="100%">
					<span class="other1name">
						<p>幸也蛋包飯</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>