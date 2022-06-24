<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>走路5~20分鐘</title>
	<link rel="stylesheet" type="text/css" href="css/walk5_style.css">
	<link rel="icon" href="image/icon.jpg">
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

	<div class="content">
		<div class="walk5title">
			<p>走路5~20分鐘</p>
		</div>
		<div class="walk5">
			<div class="walk51">
				<a href="nomoney1.php"><img src="image/no_money1-1.jpg" width="80%"></a><br>
				<a href="nomoney1.php">食來運轉</a>
				<p>贈送飲料的便當店</p>
			</div>
			<div class="walk51">
				<a href="nomoney2.php"><img src="image/no_money2-1.jpg" width="80%"></a><br>
				<a href="nomoney2.php">包子商行</a>
				<p>皮薄餡多的包子</p>
			</div>
			<div class="walk51">
				<a href="nomoney4.php"><img src="image/no_money4-1.jpg" width="80%"></a><br>
				<a href="nomoney4.php">順來十全排骨</a>
				<p>排骨湯配熱炒</p>
			</div>
			<div class="walk51">
				<a href="glutton1.php"><img src="image/glutton1-1.jpg" width="80%"></a><br>
				<a href="glutton1.php">及品鍋貼水餃專賣店</a>
				<p>美崙街必吃</p>
			</div>
		</div>
		<div class="walk52">
			<div class="walk51">
				<a href="glutton4.php"><img src="image/glutton4-1.jpg" width="80%"></a><br>
				<a href="glutton4.php">幸也蛋包飯</a>
				<p>cp值爆表的蛋包飯</p>
			</div>
			<div class="walk51">
				<a href="expensive2.php"><img src="image/expensive2-1.jpg" width="80%"></a><br>
				<a href="expensive2.php">小倉庫食研所</a>
				<p>google評價將近滿分的早午餐</p>
			</div>
			<div class="walk51">
				<a href="expensive3.php"><img src="image/expensive3-1.jpg" width="80%"></a><br>
				<a href="expensive3.php">食尚曼谷</a>
				<p>高檔的泰式料理</p>
			</div>

		</div>

		
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>