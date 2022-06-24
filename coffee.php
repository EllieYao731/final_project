<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>咖啡廳</title>
	<link rel="stylesheet" type="text/css" href="css/coffee_style.css">
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
		<div class="coffeetitle">
			<p>咖啡廳</p>
		</div>
		<div class="coffee">
			<div class="coffee1">
				<a href="happy1.php"><img src="image/happy1-1.jpg" width="80%"></a><br>
				<a href="happy1.php">咖啡弄</a>
				<p>經典下午茶</p>
			</div>
			<div class="coffee1">
				<a href="happy3.php"><img src="image/happy3-1.jpg" width="80%"></a><br>
				<a href="happy3.php">青衫咖啡Kaffa Indigo</a>
				<p>裝潢獨特的咖啡廳</p>
			</div>
			
		</div>

		
	</div>
	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>