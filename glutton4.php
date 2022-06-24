<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>幸也蛋包飯</title>
	<link rel="stylesheet" type="text/css" href="css/glutton4_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "G401":
         $_SESSION["Name"] = "經典蛋包飯";
         $_SESSION["Price"] = 85;
         break;
      case "G402":
         $_SESSION["Name"] = "炸蝦蛋包飯";
         $_SESSION["Price"] = 180;
         break;
      case "G403":
         $_SESSION["Name"] = "咖哩豬排蛋包飯";
         $_SESSION["Price"] = 140;
         break;
      case "G404":
         $_SESSION["Name"] = "起司雞排蛋包飯";
         $_SESSION["Price"] = 160;
         break; 
      case "G405":
         $_SESSION["Name"] = "紅酒菲力蛋包飯";
         $_SESSION["Price"] = 200;
         break; 
      case "G406":
         $_SESSION["Name"] = "泰式酸辣雞排蛋包飯";
         $_SESSION["Price"] = 160;
         break; 
      case "G407":
         $_SESSION["Name"] = "咖哩起司漢堡蛋包飯";
         $_SESSION["Price"] = 180;
         break; 
      case "G408":
         $_SESSION["Name"] = "精緻紅燒牛南蛋包飯";
         $_SESSION["Price"] = 190;
         break; 
      case "G409":
         $_SESSION["Name"] = "泰式椰汁海鮮蛋包飯";
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
			<img src="image/glutton4-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>幸也蛋包飯</b>
			</span>
			<span class="information2">
				<p>幸也蛋包飯位於士林夜市附近，是附近東吳，銘傳，文化大學生最愛去吃的日是蛋包飯，蛋包飯的特色是它的蛋皮是漩渦狀的，醬汁有茄汁，咖哩等等。</p>
			</span>
			<span class="information3">
				<p>營業時間：週一至週五11:30~14:30  17:30~22:00</p>
			</span>
			<span class="information4">
				<p><a href="tel::02-2881-2639">電話：:02-2881-2639</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E5%A4%A7%E5%8C%97%E8%B7%AF12%E8%99%9F/@25.089846,121.5245008,17z/data=!3m1!4b1!4m5!3m4!1s0x3442aea538d5b79f:0x8ccf789d30781167!8m2!3d25.0898412!4d121.5266895" target="blank">地址：台北市士林區大北路12號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/glutton4-2.jpg">
				</div>
				<div class="re2">
					<img src="image/glutton4-3.jpg">
				</div>
				<div class="re3">
					<img src="image/glutton4-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>紅酒菲力蛋包飯 $200</p>
				</div>
				<div class="rename2">
					<p>咖哩起司漢堡蛋包飯 $200</p>
				</div>
				<div class="rename3">
					<p>起司雞排蛋包飯 $180</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menus">
				<form action="glutton4.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="蛋包飯">
							<option value="G401">經典蛋包飯 $85</option>
							<option value="G402">炸蝦蛋包飯 $180</option>
							<option value="G403">咖哩豬排蛋包飯 $140</option>
							<option value="G404">起司雞排蛋包飯 $160</option>
							<option value="G405">紅酒菲力蛋包飯 $200</option>
							<option value="G406">泰式酸辣雞排蛋包飯 $160</option>
							<option value="G407">咖哩起司漢堡蛋包飯 $</option>
							<option value="G408">精緻紅燒牛南蛋包飯 $</option>
							<option value="G409">泰式椰汁海鮮蛋包飯 $</option>
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
						<p>Dino</p>
					</div>
					<div class="comment1words">
						<p>好吃，適合帶全家大小來，還可以加飯，口味也不錯，但人真的很多。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people2.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Sana</p>
					</div>
					<div class="comment2words">
						<p>價格不高，份量大，店內有附免費的檸檬紅茶和冬瓜茶。</p>
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
    <form method="post" action="glutton4.php">
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
					<a href="glutton3.php"><img src="image/glutton3-1.jpg" width="100%">
					<span class="other1name">
						<p>越蘭香越南美食</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="glutton1.php"><img src="image/glutton1-1.jpg" width="100%">
					<span class="other1name">
						<p>及品鍋貼水餃專賣店</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>