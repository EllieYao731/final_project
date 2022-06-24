<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>荷麵亭</title>
	<link rel="stylesheet" type="text/css" href="css/glutton2_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "G201":
         $_SESSION["Name"] = "經典味增麵";
         $_SESSION["Price"] = 260;
         break;
      case "G202":
         $_SESSION["Name"] = "淡麗正油拉麵";
         $_SESSION["Price"] = 200;
         break;
      case "G203":
         $_SESSION["Name"] = "秘製新豚骨拉麵";
         $_SESSION["Price"] = 260;
         break;
      case "G204":
         $_SESSION["Name"] = "醬油濃厚豚骨拉麵";
         $_SESSION["Price"] = 250;
         break; 
      case "G205":
         $_SESSION["Name"] = "鹽味濃厚豚骨拉麵";
         $_SESSION["Price"] = 250;
         break; 
      case "G206":
         $_SESSION["Name"] = "和歌山濃口醬油拉麵 ";
         $_SESSION["Price"] = 250;
         break; 
      case "G207":
         $_SESSION["Name"] = "海苔";
         $_SESSION["Price"] = 20;
         break; 
      case "G208":
         $_SESSION["Name"] = "糖心蛋";
         $_SESSION["Price"] = 30;
         break; 
      case "G209":
         $_SESSION["Name"] = "龍蝦沙拉";
         $_SESSION["Price"] = 80;
         break;  
      case "G210":
         $_SESSION["Name"] = "海苔蔬菜捲";
         $_SESSION["Price"] = 60;
         break;  
      case "G211":
         $_SESSION["Name"] = "馬鈴薯炸蝦";
         $_SESSION["Price"] = 70;
         break;  
      case "G212":
         $_SESSION["Name"] = "特製叉燒/3片";
         $_SESSION["Price"] = 60;
         break;  
      case "G213":
         $_SESSION["Name"] = "招牌塘揚炸雞";
         $_SESSION["Price"] = 80;
         break;  
      case "G214":
         $_SESSION["Name"] = "炸蝦天婦羅/2支";
         $_SESSION["Price"] = 60;
         break;  
      case "G215":
         $_SESSION["Name"] = "北海道可樂餅/2入";
         $_SESSION["Price"] = 80;
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
			<img src="image/glutton2-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>荷麵亭</b>
			</span>
			<span class="information2">
				<p>前陣子網路上流行著拉麵地圖，如果來到士林站，不妨試試荷麵亭吧!每款湯頭的拉麵都非常美味。</p>
			</span>
			<span class="information3">
				<p>營業時間：週一至周日11:40~14:00 17:10~20:30</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2883-0460">電話：02-2883-0460</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E4%B8%AD%E5%B1%B1%E5%8C%97%E8%B7%AF%E4%BA%94%E6%AE%B5505%E5%B7%B742%E5%BC%842%E8%99%9F/@25.0931818,121.5244623,17z/data=!3m1!4b1!4m5!3m4!1s0x3442aea4a47559e7:0xba2858186f6d8d3d!8m2!3d25.093177!4d121.526651" target="blank">地址：台北市士林區中山北路五段505巷42弄2號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/glutton2-2.jpg">
				</div>
				<div class="re2">
					<img src="image/glutton2-3.jpg">
				</div>
				<div class="re3">
					<img src="image/glutton2-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>濃厚醬油拉麵 $250</p>
				</div>
				<div class="rename2">
					<p>鹽味濃厚豚骨拉麵 $250</p>
				</div>
				<div class="rename3">
					<p>馬鈴薯炸蝦 $70</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menus">
				<form action="glutton2.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="拉麵">
							<option value="G201">經典味增麵 $260</option>
							<option value="G202">淡麗正油拉麵 $200</option>
							<option value="G203">秘製新豚骨拉麵 $260</option>
							<option value="G204">醬油濃厚豚骨拉麵 $250</option>
							<option value="G205">鹽味濃厚豚骨拉麵 $250</option>
							<option value="G206">和歌山濃口醬油拉麵 $250</option>
						</optgroup>
						<optgroup label="配料">
							<option value="G207">海苔 $20</option>
							<option value="G208">糖心蛋 $30</option>
							<option value="G209">龍蝦沙拉 $80</option>
							<option value="G210">海苔蔬菜捲 $60</option>
							<option value="G211">馬鈴薯炸蝦 $70</option>
							<option value="G212">特製叉燒/3片 $60</option>
							<option value="G213">招牌塘揚炸雞 $80</option>
							<option value="G214">炸蝦天婦羅/2支 $60</option>
							<option value="G215">北海道可樂餅/2入 $</option>
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
					<img src="image/people8.jpg" width="20%">
				</div>
				<div class="comment1content">
					<div class="comment1name">
						<p>Leo</p>
					</div>
					<div class="comment1words">
						<p>可以加兩次麵，麵的份量算大，CP值高。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people2.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Mandy</p>
					</div>
					<div class="comment2words">
						<p>馬鈴薯炸蝦真的很特別但稍油，每口都有吃到蝦子。</p>
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
    <form method="post" action="glutton2.php">
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
					<a href="glutton1.php"><img src="image/glutton1-1.jpg" width="100%">
					<span class="other1name">
						<p>及品鍋貼水餃專賣店</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="glutton3.php"><img src="image/glutton3-1.jpg" width="100%">
					<span class="other1name">
						<p>越蘭香越南美食</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>