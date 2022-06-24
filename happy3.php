<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>青衫咖啡Kaffa Indigo</title>
	<link rel="stylesheet" type="text/css" href="css/happy3_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "H301":
         $_SESSION["Name"] = "美式";
         $_SESSION["Price"] = 80;
         break;
      case "H302":
         $_SESSION["Name"] = "拿鐵";
         $_SESSION["Price"] = 110;
         break;
      case "H303":
         $_SESSION["Name"] = "卡布奇諾";
         $_SESSION["Price"] = 110;
         break;
      case "H304":
         $_SESSION["Name"] = "淺白小拿鐵";
         $_SESSION["Price"] = 95;
         break; 
      case "H305":
         $_SESSION["Name"] = "青衫焦糖瑪奇朵";
         $_SESSION["Price"] = 120;
         break; 
      case "H306":
         $_SESSION["Name"] = "經典巧克力摩卡";
         $_SESSION["Price"] = 120;
         break; 
      case "H307":
         $_SESSION["Name"] = "提拉米蘇";
         $_SESSION["Price"] = 150;
         break; 
      case "H308":
         $_SESSION["Name"] = "紅蘿蔔蛋糕";
         $_SESSION["Price"] = 150;
         break; 
      case "H309":
         $_SESSION["Name"] = "季節水果鬆餅";
         $_SESSION["Price"] = 140;
         break;  
      case "H310":
         $_SESSION["Name"] = "脆皮薯條";
         $_SESSION["Price"] = 100;
         break;  
      case "H311":
         $_SESSION["Name"] = "炸物拼盤";
         $_SESSION["Price"] = 250;
         break;  
      case "H312":
         $_SESSION["Name"] = "水牛城辣雞翅";
         $_SESSION["Price"] = 140;
         break;  
      case "H313":
         $_SESSION["Name"] = "墨西哥牛肉薄餅";
         $_SESSION["Price"] = 190;
         break;  
      case "H314":
         $_SESSION["Name"] = "蒜泥白肉飯";
         $_SESSION["Price"] = 200;
         break;  
      case "H315":
         $_SESSION["Name"] = "墨西哥牛肉薄餅";
         $_SESSION["Price"] = 190;
         break; 
      case "H316":
         $_SESSION["Name"] = "傳統肉醬義大利麵";
         $_SESSION["Price"] = 200;
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
			<img src="image/happy3-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>青衫咖啡Kaffa Indigo</b>
			</span>
			<span class="information2">
				<p>青衫咖啡以清新簡約的風格，在幾乎都是服飾店和風格濃厚的餐廳之間，成了整條街上最惹眼的那個。以後來到士林夜市，不再只有小吃和逛夜市這樣單調的選擇了！</p>
			</span>
			<span class="information3">
				<p>營業時間：週二至週日12:00~19:00</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2881-1978">電話：02-2881-1978</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E5%A4%A7%E5%8C%97%E8%B7%AF42-1%E8%99%9F/@25.0899934,121.5238061,17z/data=!3m1!4b1!4m5!3m4!1s0x3442aea5367d66a1:0x589e71f65f0fdf2e!8m2!3d25.0899886!4d121.5259948" target="blank">地址：台北市士林區大北路42號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/happy3-2.jpg">
				</div>
				<div class="re2">
					<img src="image/happy3-3.jpg">
				</div>
				<div class="re3">
					<img src="image/happy3-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>蒜泥白肉飯 $200</p>
				</div>
				<div class="rename2">
					<p>墨西哥牛肉薄餅 $190</p>
				</div>
				<div class="rename3">
					<p>傳統肉醬義大利麵 $200</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menusrow1">
				<form action="happy3.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="飲料">
							<option value="H301">美式 $80</option>
							<option value="H302">拿鐵 $110</option>
							<option value="H303">卡布奇諾 $110</option>
							<option value="H304">淺白小拿鐵 $95</option>
							<option value="H305">青衫焦糖瑪奇朵 $120</option>
							<option value="H306">經典巧克力摩卡 $120</option>
						</optgroup>
						<optgroup label="甜點">
							<option value="H307">提拉米蘇 $150</option>
							<option value="H308">紅蘿蔔蛋糕 $150</option>
							<option value="H309">季節水果鬆餅 $140</option>
						</optgroup>
						<optgroup label="輕食">
							<option value="H310">脆皮薯條 $100</option>
							<option value="H311">炸物拼盤 $250</option>
							<option value="H312">水牛城辣雞翅 $140</option>
							<option value="H313">墨西哥牛肉薄餅 $190</option>
						</optgroup>
						<optgroup label="鹹食">
							<option value="H314">蒜泥白肉飯 $200</option>
							<option value="H315">墨西哥牛肉薄餅 $190</option>
							<option value="H316">傳統肉醬義大利麵 $200</option>
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
					<img src="image/people4.jpg" width="20%">
				</div>
				<div class="comment1content">
					<div class="comment1name">
						<p>Winnie</p>
					</div>
					<div class="comment1words">
						<p>環境不錯，服務較隨興，麵量偏少，低消一主餐一飲料。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people6.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Jimmy</p>
					</div>
					<div class="comment2words">
						<p>很適合放鬆小酌一杯的地方，調酒好喝，音樂演奏也很專業。</p>
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
    <form method="post" action="happy3.php">
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
					<a href="happy2.php"><img src="image/happy2-1.jpg" width="100%">
					<span class="other1name">
						<p>創意麵</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="happy4.php"><img src="image/happy4-1.jpg" width="100%">
					<span class="other1name">
						<p>莫夏印度</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>