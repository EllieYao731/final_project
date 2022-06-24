<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>熱浪島南洋蔬食茶堂 </title>
	<link rel="stylesheet" type="text/css" href="css/expensive4_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "E401":
         $_SESSION["Name"] = "叻沙麵";
         $_SESSION["Price"] = 319;
         break;
      case "E402":
         $_SESSION["Name"] = "海南雞飯";
         $_SESSION["Price"] = 329;
         break;
      case "E403":
         $_SESSION["Name"] = "串燒薑黃飯";
         $_SESSION["Price"] = 339;
         break;
      case "E404":
         $_SESSION["Name"] = "南洋砂鍋飯";
         $_SESSION["Price"] = 339;
         break; 
      case "E405":
         $_SESSION["Name"] = "娘惹咖哩煲";
         $_SESSION["Price"] = 349;
         break; 
      case "E406":
         $_SESSION["Name"] = "南洋咖哩火鍋";
         $_SESSION["Price"] = 399;
         break; 
      case "E407":
         $_SESSION["Name"] = "黑咖啡";
         $_SESSION["Price"] = 90;
         break; 
      case "E408":
         $_SESSION["Name"] = "白咖啡";
         $_SESSION["Price"] = 100;
         break; 
      case "E409":
         $_SESSION["Name"] = "熱浪咖啡";
         $_SESSION["Price"] = 110;
         break;  
      case "E410":
         $_SESSION["Name"] = "恐龍奶茶";
         $_SESSION["Price"] = 110;
         break;  
      case "E411":
         $_SESSION["Name"] = "紅棗桂圓茶";
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
			<img src="image/expensive4-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>熱浪島南洋蔬食茶堂 </b>
			</span>
			<span class="information2">
				<p>熱浪島南洋蔬食料理創始於台中，南洋咖哩風味餐點非常美味，全台已有多家分店。</p>
			</span>
			<span class="information3">
				<p>營業時間：週三至周日11:30~20:00</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2883-1885">電話：02-2883-1885</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com.tw/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E8%87%B3%E5%96%84%E8%B7%AF%E4%BA%8C%E6%AE%B533%E8%99%9F/@25.0973897,121.5421673,17z/data=!3m1!4b1!4m5!3m4!1s0x3442ac23b4c79aa3:0x7ca4d778fa00d3fa!8m2!3d25.0973849!4d121.544356?hl=zh-TW" target="blank">地址：台北市士林區至善路二段33號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/expensive4-2.jpg">
				</div>
				<div class="re2">
					<img src="image/expensive4-3.jpg">
				</div>
				<div class="re3">
					<img src="image/expensive4-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>叻沙麵 $319</p>
				</div>
				<div class="rename2">
					<p>串燒薑黃飯 $339</p>
				</div>
				<div class="rename3">
					<p>南洋砂鍋飯 $339</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menus">
				<form action="expensive4.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
      					<option disabled="true" selected="true">請選擇餐點</option>
						<optgroup label="主食">
							<option value="E401">叻沙麵 $319</option>
							<option value="E402">海南雞飯 $329</option>
							<option value="E403">串燒薑黃飯 $339</option>
							<option value="E404">南洋砂鍋飯 $339</option>
							<option value="E405">娘惹咖哩煲 $349</option>
							<option value="E406">南洋咖哩火鍋 $399</option>
						</optgroup>
						<optgroup label="飲料">
							<option value="E407">黑咖啡 $90</option>
							<option value="E408">白咖啡 $100</option>
							<option value="E409">熱浪咖啡 $110</option>
							<option value="E410">恐龍奶茶 $110</option>
							<option value="E411">紅棗桂圓茶 $120</option>	
						</optgroup>
						<input type="number" name="Quantity" value="1" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;" min="0" max="15">
					</select>
					<button type="submit" value="訂購" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px; background-color: #f19755;">訂購</button> 
				</form>
			</div>
			<div class="submit">
			<!--	<button onclick="getElementById('order').style.display ='block'" style="width: auto;" class="mealsubmit">送出</button> -->
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
						<p>Krystal</p>
					</div>
					<div class="comment1words">
						<p>用餐時間90分鐘，想吃悠閒一點的話不建議點火鍋。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people10.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Wen</p>
					</div>
					<div class="comment2words">
						<p>吃了第一口後就停不下來了。</p>
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
    <form method="post" action="expensive4.php">
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
					<a href="expensive3.php"><img src="image/expensive3-1.jpg" width="100%">
					<span class="other1name">
						<p>食尚曼谷</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="expensive1.php"><img src="image/expensive1-1.jpg" width="100%">
					<span class="other1name">
						<p>洋蔥牛排</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>