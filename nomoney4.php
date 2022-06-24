<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>順來十全排骨</title>
	<link rel="stylesheet" type="text/css" href="css/nomoney4_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "N401":
         $_SESSION["Name"] = "十全排骨";
         $_SESSION["Price"] = 95;
         break;
      case "N402":
         $_SESSION["Name"] = "十全土虱";
         $_SESSION["Price"] = 95;
         break;
      case "N403":
         $_SESSION["Name"] = "十全雞腿";
         $_SESSION["Price"] = 115;
         break;
      case "N404":
         $_SESSION["Name"] = "麻油雞腿";
         $_SESSION["Price"] = 115;
         break; 
      case "N405":
         $_SESSION["Name"] = "十全土虱麵線";
         $_SESSION["Price"] = 120;
         break; 
      case "N406":
         $_SESSION["Name"] = "十全排骨麵線";
         $_SESSION["Price"] = 120;
         break; 
      case "N407":
         $_SESSION["Name"] = "十全雞腿麵線";
         $_SESSION["Price"] = 135;
         break; 
      case "N408":
         $_SESSION["Name"] = "麻油雞腿麵線";
         $_SESSION["Price"] = 135;
         break; 
      case "N409":
         $_SESSION["Name"] = "炒脆腸";
         $_SESSION["Price"] = 180;
         break;  
      case "N410":
         $_SESSION["Name"] = "炒脆腸";
         $_SESSION["Price"] = 180;
         break;  
      case "N411":
         $_SESSION["Name"] = "炒高麗菜";
         $_SESSION["Price"] = 80;
         break;  
      case "N412":
         $_SESSION["Name"] = "蔥爆豬肉";
         $_SESSION["Price"] = 200;
         break;  
      case "N413":
         $_SESSION["Name"] = "蔥爆羊肉";
         $_SESSION["Price"] = 200;
         break;  
      case "N414":
         $_SESSION["Name"] = "蔥爆牛肉";
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
			<img src="image/no_money4-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>順來十全排骨</b>
			</span>
			<span class="information2">
				<p>店內排骨湯都是用中藥去燉煮，經過就會聞到香氣，讓人忍不住走到店內品嘗一碗，除了湯品，熱炒也是人氣餐點。</p>
			</span>
			<span class="information3">
				<p>營業時間：週一至週日11:00~3:00</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2889-1916">電話：02-2889-1916</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E5%9F%BA%E6%B2%B3%E8%B7%AF115%E8%99%9F/@25.0881204,121.521806,17z/data=!3m1!4b1!4m5!3m4!1s0x3442aeb06d078497:0xd593064a3dc8f32!8m2!3d25.0881156!4d121.5239947" target="blank">地址：台北市士林區基河路115號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/no_money4-2.jpg">
				</div>
				<div class="re2">
					<img src="image/no_money4-3.jpg">
				</div>
				<div class="re3">
					<img src="image/no_money4-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>十全土虱 $95</p>
				</div>
				<div class="rename2">
					<p>十全排骨 $95</p>
				</div>
				<div class="rename3">
					<p>炒花枝 $200</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menus">
				<form action="nomoney4.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
							<optgroup label="招牌">
							<option value="N401">十全排骨 $95</option>
							<option value="N402">十全土虱$95</option>
							<option value="N403">十全雞腿$115</option>
							<option value="N404">麻油雞腿$115</option>
							<option value="N405">十全土虱麵線$120</option>
							<option value="N406">十全排骨麵線$120</option>
							<option value="N407">十全雞腿麵線$135</option>
							<option value="N408">麻油雞腿麵線$135</option>
						</optgroup>
						<optgroup label="熱炒">
							<option value="N409">炒脆腸$180</option>
							<option value="N410">炒脆腸$180</option>
							<option value="N411">炒高麗菜$80</option>
							<option value="N412">蔥爆豬肉$200</option>
							<option value="N413">蔥爆羊肉$200</option>
							<option value="N414">蔥爆牛肉$200
						</optgroup>
						<input type="number" name="Quantity" value="1" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;" min="0" max="15">
					</select>
					<button type="submit" value="訂購" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px; background-color: #f19755;">訂購</button> 
				</form>
			</div>
			<div class="submit">
<!--				<button onclick="getElementById('order').style.display ='block'" style="width: auto;" class="mealsubmit">送出</button>  -->
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
					<img src="image/people5.jpg" width="20%">
				</div>
				<div class="comment1content">
					<div class="comment1name">
						<p>Emma</p>
					</div>
					<div class="comment1words">
						<p>便宜又好吃，已經吃十來年了，口味還是依然美味。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people9.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Ben</p>
					</div>
					<div class="comment2words">
						<p>常去的店家，裝潢後環境比較舒適。</p>
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
    <form method="post" action="nomoney4.php">
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
					<a href="nomoney3.php"><img src="image/no_money3-1.jpg" width="100%">
					<span class="other1name">
						<p>老虎醬溫州大餛飩</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="nomoney1.php"><img src="image/no_money1-1.jpg" width="100%">
					<span class="other1name">
						<p>食來運轉</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>