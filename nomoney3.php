<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>老虎醬溫州大餛飩</title>
	<link rel="stylesheet" type="text/css" href="css/nomoney3_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "N301":
         $_SESSION["Name"] = "麻醬麵";
         $_SESSION["Price"] = 55;
         break;
      case "N302":
         $_SESSION["Name"] = "炸醬麵";
         $_SESSION["Price"] = 55;
         break;
      case "N303":
         $_SESSION["Name"] = "榨菜肉絲麵";
         $_SESSION["Price"] = 65;
         break;
      case "N304":
         $_SESSION["Name"] = "香辣老虎麵";
         $_SESSION["Price"] = 65;
         break; 
      case "N305":
         $_SESSION["Name"] = "溫州抄手麵";
         $_SESSION["Price"] = 85;
         break; 
      case "N306":
         $_SESSION["Name"] = "菜肉抄手麵";
         $_SESSION["Price"] = 90;
         break; 
      case "N307":
         $_SESSION["Name"] = "蝦肉抄手麵";
         $_SESSION["Price"] = 95;
         break; 
      case "N308":
         $_SESSION["Name"] = "鮮肉大餛飩麵";
         $_SESSION["Price"] = 70;
         break; 
      case "N309":
         $_SESSION["Name"] = "菜肉大餛飩麵";
         $_SESSION["Price"] = 75;
         break;  
      case "N310":
         $_SESSION["Name"] = "蝦肉大餛飩麵";
         $_SESSION["Price"] = 80;
         break;  
      case "N311":
         $_SESSION["Name"] = "鮮肉大餛飩湯";
         $_SESSION["Price"] = 60;
         break;  
      case "N312":
         $_SESSION["Name"] = "菜肉大餛飩湯";
         $_SESSION["Price"] = 65;
         break;  
      case "N313":
         $_SESSION["Name"] = "蝦肉大餛飩湯";
         $_SESSION["Price"] = 70;
         break;  
      case "N314":
         $_SESSION["Name"] = "鮮肉麻醬紅油抄手";
         $_SESSION["Price"] = 60;
         break;  
      case "N315":
         $_SESSION["Name"] = "菜肉麻醬紅油抄手";
         $_SESSION["Price"] = 65;
         break; 
      case "N316":
         $_SESSION["Name"] = "蝦肉麻醬紅油抄手";
         $_SESSION["Price"] = 70;
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
			<img src="image/no_money3-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>老虎醬溫州大餛飩</b>
			</span>
			<span class="information2">
				<p>老虎醬溫州大餛飩在台北已有好幾家分店，店內不管是大餛飩，麵食小菜都非常道地，餛飩用料非常大方，不管是湯，麻醬吃法都非常好。</p>
			</span>
			<span class="information3">
				<p>營業時間：週一至週日10:00~22:00</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2881-7971">電話：02-2881-7971</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E4%B8%AD%E6%AD%A3%E8%B7%AF331%E8%99%9F/@25.0945296,121.5209281,17z/data=!3m1!4b1!4m5!3m4!1s0x3442aebc823a4883:0x6297acaeac231162!8m2!3d25.0945248!4d121.5231168" target="blank">地址：台北市士林區中正路331號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/no_money3-2.jpg">
				</div>
				<div class="re2">
					<img src="image/no_money3-3.jpg">
				</div>
				<div class="re3">
					<img src="image/no_money3-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>菜肉大餛飩湯 $75</p>
				</div>
				<div class="rename2">
					<p>炸醬麵 $65</p>
				</div>
				<div class="rename3">
					<p>蝦肉抄手麵 $105</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menus">
				<form action="nomoney3.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="麵">
							<option value="N301">麻醬麵 $55</option>
							<option value="N302">炸醬麵 $55</option>
							<option value="N303">榨菜肉絲麵 $65</option>
							<option value="N304">香辣老虎麵 $65</option>
							<option value="N305">溫州抄手麵 $85</option>
							<option value="N306">菜肉抄手麵 $90</option>
							<option value="N307">蝦肉抄手麵 $95</option>
							<option value="N308">鮮肉大餛飩麵 $70</option>
							<option value="N309">菜肉大餛飩麵 $75</option>
							<option value="N310">蝦肉大餛飩麵 $80</option>
						</optgroup>
						<optgroup label="湯/抄手">
							<option value="N311">鮮肉大餛飩湯 $60</option>
							<option value="N312">菜肉大餛飩湯 $65</option>
							<option value="N313">蝦肉大餛飩湯 $70</option>
							<option value="N314">鮮肉麻醬紅油抄手 $60</option>
							<option value="N315">菜肉麻醬紅油抄手 $65</option>
							<option value="N316">蝦肉麻醬紅油抄手 $70</option>
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
					<img src="image/people3.jpg" width="20%">
				</div>
				<div class="comment1content">
					<div class="comment1name">
						<p>Lily</p>
					</div>
					<div class="comment1words">
						<p>用餐環境乾淨，大餛飩蠻好吃的。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people7.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Tom</p>
					</div>
					<div class="comment2words">
						<p>桌上的特製老虎醬真的很經典，一定要加加看！</p>
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
    <form method="post" action="nomoney3.php">
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
					<a href="nomoney2.php"><img src="image/no_money2-1.jpg" width="100%">
					<span class="other1name">
						<p>包子商行</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="nomoney4.php"><img src="image/no_money4-1.jpg" width="100%">
					<span class="other1name">
						<p>順來十全排骨</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>