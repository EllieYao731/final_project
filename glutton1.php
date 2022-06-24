<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>及品鍋貼水餃專賣店</title>
	<link rel="stylesheet" type="text/css" href="css/glutton1_style.css">
	<link rel="icon" href="image/icon.jpg">
<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "G101":
         $_SESSION["Name"] = "鍋貼";
         $_SESSION["Price"] = 5;
         break;
      case "G102":
         $_SESSION["Name"] = "牛肉水餃";
         $_SESSION["Price"] = 9;
         break;
      case "G103":
         $_SESSION["Name"] = "鮮肉韭菜水餃";
         $_SESSION["Price"] = 6;
         break;
      case "G104":
         $_SESSION["Name"] = "鮮肉菜肉水餃";
         $_SESSION["Price"] = 6.5;
         break; 
      case "G105":
         $_SESSION["Name"] = "鮮肉高麗菜水餃";
         $_SESSION["Price"] = 6;
         break; 
      case "G106":
         $_SESSION["Name"] = "鮮肉玉米蔬菜水餃";
         $_SESSION["Price"] = 7;
         break; 
      case "G107":
         $_SESSION["Name"] = "鮮肉翠玉白菜水餃";
         $_SESSION["Price"] = 6.5;
         break; 
      case "G108":
         $_SESSION["Name"] = "酸辣湯";
         $_SESSION["Price"] = 30;
         break; 
      case "G109":
         $_SESSION["Name"] = "玉米濃湯";
         $_SESSION["Price"] = 30;
         break;  
      case "G110":
         $_SESSION["Name"] = "每日一湯";
         $_SESSION["Price"] = 35;
         break;  
      case "G111":
         $_SESSION["Name"] = "酸辣湯餃(玉)";
         $_SESSION["Price"] = 91;
         break;  
      case "G112":
         $_SESSION["Name"] = "酸辣湯餃(牛)";
         $_SESSION["Price"] = 107;
         break;  
      case "G113":
         $_SESSION["Name"] = "酸辣湯餃(高/韭)";
         $_SESSION["Price"] = 83;
         break;  
      case "G114":
         $_SESSION["Name"] = "酸辣湯餃(菜/白)";
         $_SESSION["Price"] = 87;
         break;  
      case "G115":
         $_SESSION["Name"] = "紅茶";
         $_SESSION["Price"] = 25;
         break;   
      case "G115":
         $_SESSION["Name"] = "豆漿";
         $_SESSION["Price"] = 25;
         break;   
      case "G115":
         $_SESSION["Name"] = "小菜";
         $_SESSION["Price"] = 50;
         break;   
      case "G115":
         $_SESSION["Name"] = "招牌飲料";
         $_SESSION["Price"] = 25;
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
			<img src="image/glutton1-1.jpg" width="100%" height="450px">
		</div>
		</a>

		<div class="information">
			<span class="information1">
				<b>及品鍋貼水餃專賣店</b>
			</span>
			<span class="information2">
				<p>每到用餐時間店外總是大排長龍，可見它賣的鍋貼水餃可厲害了!鍋貼外皮酥脆餡又香，水餃皮Q且裡面包的料也很新鮮。</p>
			</span>
			<span class="information3">
				<p>營業時間：週一至周六11:10~20:30</p>
			</span>
			<span class="information4">
				<p><a href="tel:02-2833-0217">電話：02-2833-0217</a></p>
				<br>
			</span>
			<span class="information5">
				<p><a href="https://www.google.com/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E7%BE%8E%E5%B4%99%E8%A1%9793-1%E8%99%9F/@25.0968357,121.5193061,17z/data=!3m1!4b1!4m5!3m4!1s0x3442aebc4886e217:0xd7110bfafcfad96c!8m2!3d25.0968309!4d121.5214948" target="blank">地址：台北市士林區美崙街93號(點我可看地圖)</a><p>
			</span>
			<a name="recommend">
		</div>

		<div class="recommend">
			<div class="recommenddish">
				<p>推薦餐點</p>
			</div>
			<div class="re">
				<div class="re1">
					<img src="image/glutton1-2.jpg">
				</div>
				<div class="re2">
					<img src="image/glutton1-3.jpg">
				</div>
				<div class="re3">
					<img src="image/glutton1-4.jpg">
				</div>
			</div>
			<div class="rename">
				<div class="rename1">
					<p>鍋貼 $5</p>
				</div>
				<div class="rename2">
					<p>鮮肉韭菜水餃 $6</p>
				</div>
				<div class="rename3">
					<p>每日一湯 $35</p>
				</div>
			</div>
		</div>

		<a name="menu">
		<div class="menu">
			<div class="startorder">
				<p>開始訂餐</p>
			</div>
			<div class="menusrow1">
				<form action="glutton1.php" method="post" style="margin-left: auto; margin-right: auto">
					<select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
						<option disabled="true" selected = "true">請選擇餐點</option>
						<optgroup label="鍋貼/水餃">
							<option value="G101">鍋貼 $5</option>
							<option value="G102">牛肉水餃 $9</option>
							<option value="G103">鮮肉韭菜水餃 $6</option>
							<option value="G104">鮮肉菜肉水餃 $6.5</option>
							<option value="G105">鮮肉高麗菜水餃 $6</option>
							<option value="G106">鮮肉玉米蔬菜水餃 $7</option>
							<option value="G107">鮮肉翠玉白菜水餃 $6.5</option>
						</optgroup>
						<optgroup label="湯">
							<option value="G108">酸辣湯 $30</option>
							<option value="G109">玉米濃湯 $30</option>
							<option value="G110">每日一湯 $35</option>
						</optgroup>
						<optgroup label="湯餃">
							<option value="G111">酸辣湯餃(玉) $91</option>
							<option value="G112">酸辣湯餃(牛) $107</option>
							<option value="G113">酸辣湯餃(高/韭) $83</option>
							<option value="G114">酸辣湯餃(菜/白) $87</option>
						</optgroup>
						<optgroup label="飲料">
							<option value="G115">紅茶 $25</option>
							<option value="G116">豆漿 $25</option>
							<option value="G117">小菜 $50</option>
							<option value="G118">招牌飲料 $25</option>
						</optgroup>
						<input type="number" name="Quantity" value="1" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;" min="0" max="15">
					</select>
					<button type="submit" value="訂購" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px; background-color: #f19755;">訂購</button> 
				</form>
			</div>
			<div class="submit">
				<!--
				<button onclick="getElementById('order').style.display ='block'" style="width: auto;" class="mealsubmit">送出</button>
			-->
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
						<p>Nina</p>
					</div>
					<div class="comment1words">
						<p>鍋貼乾爽香脆，內餡調味適中多汁清甜，高麗菜仍保持脆度，皮Q不軟爛。</p>
					</div>
				</div>	
			</div>
			<div class="comment2">
				<div class="comment2photo">
					<img src="image/people10.jpg" width="20%">
				</div>
				<div class="comment2content">
					<div class="comment2name">
						<p>Jason</p>
					</div>
					<div class="comment2words">
						<p>小菜可口，湯品料多實在，服務快速親切。</p>
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
    <form method="post" action="glutton1.php">
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
					<a href="glutton4.php"><img src="image/glutton4-1.jpg" width="100%">
					<span class="other1name">
						<p>幸也蛋包飯</p>
					</span>
					</a>
				</div>
				<div class="space"></div>
				<div class="other2">
					<a href="glutton2.php"><img src="image/glutton2-1.jpg" width="100%">
					<span class="other1name">
						<p>荷麵亭</p>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>