<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>咖啡弄</title>
	<link rel="stylesheet" type="text/css" href="css/happy1_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "H101":
         $_SESSION["Name"] = "鮪魚三明治";
         $_SESSION["Price"] = 150;
         break;
      case "H102":
         $_SESSION["Name"] = "總匯三明治";
         $_SESSION["Price"] = 180;
         break;
      case "H103":
         $_SESSION["Name"] = "燻牛肉三明治";
         $_SESSION["Price"] = 180;
         break;
      case "H104":
         $_SESSION["Name"] = "墨爾本龍蝦堡";
         $_SESSION["Price"] = 720;
         break; 
      case "H105":
         $_SESSION["Name"] = "熱熔起司蒜香堡";
         $_SESSION["Price"] = 350;
         break; 
      case "H106":
         $_SESSION["Name"] = "BBQ豬排三明治";
         $_SESSION["Price"] = 200;
         break; 
      case "H107":
         $_SESSION["Name"] = "草莓冰淇淋鬆餅";
         $_SESSION["Price"] = 230;
         break; 
      case "H108":
         $_SESSION["Name"] = "鮮果冰淇淋鬆餅";
         $_SESSION["Price"] = 210;
         break; 
      case "H109":
         $_SESSION["Name"] = "煉乳花生醬鬆餅";
         $_SESSION["Price"] = 140;
         break;  
      case "H110":
         $_SESSION["Name"] = "味焦糖冰淇淋鬆餅";
         $_SESSION["Price"] = 180;
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
			<img src="image/happy1-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>咖啡弄</b>
			</span>
			<span class="information2">
				<p>位於士林捷運站一號出口，主打鬆餅、輕食，還會不時推出新產品，算是間表現有一定水準的下午茶咖啡廳。</p>
			</span>
			<span class="information3">
				<p>營業時間：週一至週日12:00~22:00</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2888-3322">電話：02-2888-3322</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E4%B8%AD%E6%AD%A3%E8%B7%AF253%E8%99%9F/@25.0949646,121.5228457,17z/data=!3m1!4b1!4m5!3m4!1s0x3442aebcb0d666f3:0x3043f4b751b3c509!8m2!3d25.0949598!4d121.5250344" target="blank">地址：台北市士林區中正路253號2樓(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/happy1-2.jpg">
				</div>
				<div class="re2">
					<img src="image/happy1-3.jpg">
				</div>
				<div class="re3">
					<img src="image/happy1-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>鹽味焦糖冰淇淋鬆餅 $180</p>
				</div>
				<div class="rename2">
					<p>總匯三明治 $180</p>
				</div>
				<div class="rename3">
					<p>冰維也納咖啡 $150</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menus">
				<form action="happy1.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="麵包">
							<option value="H101">鮪魚三明治 $150</option>
							<option value="H102">總匯三明治 $180</option>
							<option value="H103">燻牛肉三明治 $180</option>
							<option value="H104">墨爾本龍蝦堡 $720</option>
							<option value="H105">熱熔起司蒜香堡 $350</option>
							<option value="H106">BBQ豬排三明治 $200</option>
						</optgroup>
						<optgroup label="鬆餅">
							<option value="H107">草莓冰淇淋鬆餅 $230</option>
							<option value="H108">鮮果冰淇淋鬆餅 $210</option>
							<option value="H109">煉乳花生醬鬆餅 $140</option>
							<option value="H110">鹽味焦糖冰淇淋鬆餅 $180</option>
						</optgroup>
						<input type="number" name="Quantity" value="1" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;" min="0" max="15">
					</select>
					<button type="submit" value="訂購" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px; background-color: #f19755;">訂購</button> 
				</form>
			</div>
			<div class="submit">
		<!--		<button onclick="getElementById('order').style.display ='block'" style="width: auto;" class="mealsubmit">送出</button>-->
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
						<p>Jerry</p>
					</div>
					<div class="comment1words">
						<p>餐點選擇性多，食物量豐富飲品好喝，服務人員態度好。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people3.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Jessica</p>
					</div>
					<div class="comment2words">
						<p>甜點、下午茶超棒，店員服務也棒，美中不足是人太多，位子太擠。</p>
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
    <form method="post" action="happy1.php">
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
					<a href="happy4.php"><img src="image/happy4-1.jpg" width="100%">
					<span class="other1name">
						<p>莫夏印度</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="happy2.php"><img src="image/happy2-1.jpg" width="100%">
					<span class="other1name">
						<p>創意麵</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>