<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>食來運轉</title>
	<link rel="stylesheet" type="text/css" href="css/nomoney1_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "N101":
         $_SESSION["Name"] = "香酥雞腿飯";
         $_SESSION["Price"] = 110;
         break;
      case "N102":
         $_SESSION["Name"] = "日式雞排飯";
         $_SESSION["Price"] = 110;
         break;
      case "N103":
         $_SESSION["Name"] = "日式豬排飯";
         $_SESSION["Price"] = 100;
         break;
      case "N105":
         $_SESSION["Name"] = "香煎排骨飯";
         $_SESSION["Price"] = 100;
         break; 
      case "N106":
         $_SESSION["Name"] = "精緻魚排飯";
         $_SESSION["Price"] = 100;
         break; 
      case "N107":
         $_SESSION["Name"] = "宮保雞丁飯";
         $_SESSION["Price"] = 100;
         break; 
      case "N108":
         $_SESSION["Name"] = "醬燒烤肉飯";
         $_SESSION["Price"] = 100;
         break; 
      case "N109":
         $_SESSION["Name"] = "鹽酥雞塊飯";
         $_SESSION["Price"] = 100;
         break;  
      case "N110":
         $_SESSION["Name"] = "牛肉炒麵";
         $_SESSION["Price"] = 95;
         break;  
      case "N111":
         $_SESSION["Name"] = "肉絲炒麵";
         $_SESSION["Price"] = 90;
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
			<img src="image/no_money1-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>食來運轉</b>
			</span>
			<span class="information2">
				<p>食來運轉被譽為便當界的奇蹟，不僅是因為便當好吃，每樣餐點都會送600cc大杯飲料! cp值非常高，是學生小資族下課下班吃飯的口袋名單。</p>
			</span>
			<span class="information3">
				<p>營業時間：週一至週日10:00~20:30</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2880-4931">電話：02-2880-4931</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E5%B0%8F%E6%9D%B1%E8%A1%9731%E8%99%9F/@25.0893467,121.5262789,17z/data=!4m13!1m7!3m6!1s0x3442aea54f4802a7:0x104d53fad9d8baad!2zMTEx5Y-w5YyX5biC5aOr5p6X5Y2A5bCP5p2x6KGXMzHomZ8!3b1!8m2!3d25.0893524!4d121.5262045!3m4!1s0x3442aea54f4802a7:0x104d53fad9d8baad!8m2!3d25.0893524!4d121.5262045" target="blank">地址：台北市士林區小東街31號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/no_money1-2.jpg">
				</div>
				<div class="re2">
					<img src="image/no_money1-3.jpg">
				</div>
				<div class="re3">
					<img src="image/no_money1-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>鹽酥雞塊飯 $110</p>
				</div>
				<div class="rename2">
					<p>宮保雞丁飯 $110</p>
				</div>
				<div class="rename3">
					<p>醬燒烤肉飯 $110</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menus">
				<form action="nomoney1.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="飯">
							<option value="N101">香酥雞腿飯 $110</option>
							<option value="N102">日式雞排飯 $110</option>
							<option value="N103">日式豬排飯 $100</option>
							<option value="N105">香煎排骨飯 $100</option>
							<option value="N106">精緻魚排飯 $100</option>
							<option value="N107">宮保雞丁飯 $100</option>
							<option value="N108">醬燒烤肉飯 $100</option>
							<option value="N109">鹽酥雞塊飯 $100</option>
						</optgroup>
						<optgroup label="麵">
							<option value="N110">牛肉炒麵 $95</option>
							<option value="N111">肉絲炒麵 $90</option>
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
					<img src="image/people1.jpg" width="20%">
				</div>
				<div class="comment1content">
					<div class="comment1name">
						<p>Hana</p>
					</div>
					<div class="comment1words">
						<p>雖然比以前漲價一點，但還是超級好吃的啦!</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people8.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>John</p>
					</div>
					<div class="comment2words">
						<p>士林少數的清流，不希望被廣為宣傳怕以後要排隊才能吃。</p>
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
    <form method="post" action="nomoney1.php">
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
					<a href="nomoney4.php"><img src="image/no_money4-1.jpg" width="100%">
					<span class="other1name">
						<p>順來十全排骨</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="nomoney2.php"><img src="image/no_money2-1.jpg" width="100%">
					<span class="other1name">
						<p>包子商行</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>