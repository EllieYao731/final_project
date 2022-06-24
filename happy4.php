<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>莫夏印度</title>
	<link rel="stylesheet" type="text/css" href="css/happy4_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "H401":
         $_SESSION["Name"] = "蔬菜角";
         $_SESSION["Price"] = 230;
         break;
      case "H402":
         $_SESSION["Name"] = "炸雞翅";
         $_SESSION["Price"] = 310;
         break;
      case "H403":
         $_SESSION["Name"] = "烤雞沙拉";
         $_SESSION["Price"] = 180;
         break;
      case "H404":
         $_SESSION["Name"] = "串烤去骨雞";
         $_SESSION["Price"] = 410;
         break; 
      case "H405":
         $_SESSION["Name"] = "小麵餅雜燴";
         $_SESSION["Price"] = 230;
         break; 
      case "H406":
         $_SESSION["Name"] = "印度田園沙拉";
         $_SESSION["Price"] = 150;
         break; 
      case "H409":
         $_SESSION["Name"] = "香魚蕃茄咖哩";
         $_SESSION["Price"] = 450;
         break;  
      case "H410":
         $_SESSION["Name"] = "綜合海鮮咖哩";
         $_SESSION["Price"] = 450;
         break;  
      case "H411":
         $_SESSION["Name"] = "馬鈴薯花椰菜咖哩";
         $_SESSION["Price"] = 320;
         break;  
      case "H412":
         $_SESSION["Name"] = "香料甜椒燉蝦咖哩";
         $_SESSION["Price"] = 460;
         break;  
      case "H413":
         $_SESSION["Name"] = "印度奶油烤嫩雞咖哩";
         $_SESSION["Price"] = 420;
         break;  
      case "H414":
         $_SESSION["Name"] = "南印度椰香雞肉咖哩";
         $_SESSION["Price"] = 410;
         break;  
      case "H415":
         $_SESSION["Name"] = "印度脆餅";
         $_SESSION["Price"] = 80;
         break; 
      case "H416":
         $_SESSION["Name"] = "奶油烤餅";
         $_SESSION["Price"] = 90;
         break;   
      case "H417":
         $_SESSION["Name"] = "大蒜烤餅";
         $_SESSION["Price"] = 95;
         break;   
      case "H418":
         $_SESSION["Name"] = "千層烤餅";
         $_SESSION["Price"] = 95;
         break;   
      case "H419":
         $_SESSION["Name"] = "印度起士烤餅";
         $_SESSION["Price"] = 115;
         break;  
      case "H421":
         $_SESSION["Name"] = "印度奶茶";
         $_SESSION["Price"] = 110;
         break;    
      case "H422":
         $_SESSION["Name"] = "Oreo奶昔";
         $_SESSION["Price"] = 125;
         break;    
      case "H423":
         $_SESSION["Name"] = "草莓奶昔";
         $_SESSION["Price"] = 140;
         break;    
      case "H424":
         $_SESSION["Name"] = "芒果優酪乳";
         $_SESSION["Price"] = 140;
         break;    
      case "H425":
         $_SESSION["Name"] = "玫瑰優酪乳";
         $_SESSION["Price"] = 140;
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
			<img src="image/happy4-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>莫夏印度</b>
			</span>
			<span class="information2">
				<p>莫夏是一間非常好的印度菜餐廳，有提供划算的商業午餐選擇，服務很棒，菜色也很棒，每道菜都非常精緻，店裡面的座位不多，要來吃最好先打電話預約一下，老闆是印度人加台灣老婆這種組合。</p>
			</span>
			<span class="information3">
				<p>營業時間：週二至週日11:30~14:30 17:30~21:30</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2834-7050">電話：02-2834-7050</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E4%B8%AD%E5%B1%B1%E5%8C%97%E8%B7%AF%E5%85%AD%E6%AE%B5138%E8%99%9F/@25.1061309,121.5228679,17z/data=!3m1!4b1!4m5!3m4!1s0x3442ae9098f08d85:0x5d22cbd27e674bfc!8m2!3d25.1061261!4d121.5250566" target="blank">地址：台北市士林區中山北路六段138號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/happy4-2.jpg">
				</div>
				<div class="re2">
					<img src="image/happy4-3.jpg">
				</div>
				<div class="re3">
					<img src="image/happy4-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>串烤去骨雞 $410</p>
				</div>
				<div class="rename2">
					<p>印度脆餅 $80</p>
				</div>
				<div class="rename3">
					<p>烤雞沙拉 $180</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menusrow1">
				<form action="happy4.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="開胃菜">
							<option value="H401">蔬菜角 $230</option>
							<option value="H402">炸雞翅 $310</option>
							<option value="H403">烤雞沙拉 $180</option>
							<option value="H404">串烤去骨雞 $410</option>
							<option value="H405">小麵餅雜燴 $230</option>
							<option value="H406">印度田園沙拉 $150</option>
							<option value="H407"></option>
							<option value="H408"></option>
						</optgroup>
						<optgroup label="咖哩">
							<option value="H409">香魚蕃茄咖哩 $450</option>
							<option value="H410">綜合海鮮咖哩 $450</option>
							<option value="H411">馬鈴薯花椰菜咖哩 $320</option>
							<option value="H412">香料甜椒燉蝦咖哩 $460</option>
							<option value="H413">印度奶油烤嫩雞咖哩 $420</option>
							<option value="H414">南印度椰香雞肉咖哩 $410</option>
						</optgroup>
						<optgroup label="道地印度烤餅">
							<option value="H415">印度脆餅 $80</option>
							<option value="H416">奶油烤餅 $90</option>
							<option value="H417">大蒜烤餅 $95</option>
							<option value="H418">千層烤餅 $95</option>
							<option value="H419">印度起士烤餅 $115</option>
							<option value="H420"></option>
						</optgroup>
						<optgroup label="飲品">
							<option value="H421">印度奶茶 $110</option>
							<option value="H422">Oreo奶昔 $125</option>
							<option value="H423">草莓奶昔 $140</option>
							<option value="H424">芒果優酪乳 $140</option>
							<option value="H425">玫瑰優酪乳 $140</option>
						</optgroup>
						<input type="number" name="Quantity" value="1" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;" min="0" max="15">
					</select>
					<button type="submit" value="訂購" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px; background-color: #f19755;">訂購</button> 
				</form>
			</div>
			<div class="submit">
<!--				<button onclick="HetElementById('order').style.display ='block'" style="width: auto;" class="mealsubmit">送出</button> -->
				<div id="order" class="orderlist">
						<form class="ordercontent animate" action=".php" method="">
							<div class="whatyouchoose">
								您所選擇的餐點
							</div>
							<div class="meal">
								
							</div>
							<div class="nooryes">
								<button type="button"  onclick="HetElementById('order').style.display ='none'" class="cancelbutton">取消</button>
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
						<p>Ray</p>
					</div>
					<div class="comment1words">
						<p>種類多，香料調味特別，推薦羊肉咖哩，店員幾乎都是印度人，應該是滿道地的。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people1.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Amber</p>
					</div>
					<div class="comment2words">
						<p>好吃！他們全方面都很有心從菜刀服務到店的整個環境。</p>
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
    <form method="post" action="happy4.php">
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
					<a href="happy3.php"><img src="image/happy3-1.jpg" width="100%">
					<span class="other1name">
						<p>青衫咖啡Kaffa Indigo</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="happy1.php"><img src="image/happy1-1.jpg" width="100%">
					<span class="other1name">
						<p>咖啡弄 </p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>