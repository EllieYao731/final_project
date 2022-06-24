<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>士林搜食記</title>
	<link rel="stylesheet" type="text/css" href="css/HomePage_style.css">
	<link rel="icon" href="image/icon.jpg">
</head>
<body>
	<?php  
	$search = $_POST["search"];

	$link = mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            '123456789',  // 密碼 
            'foods');  // 預設使用的資料庫名稱 

	$sql = "SELECT DISTINCT `restaurant`,`restaurant ID`,`introduce`,`picture` FROM foods_search WHERE restaurant LIKE('%" . $search . "%') OR menu LIKE('%" . $search . "%') OR address LIKE('%" . $search . "%') OR introduce LIKE('%" . $search . "%')";


	?>

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
			<form name = "search" method = "post" action = "foods_search.php">
				<input type="text" id="search" name="search" placeholder="你想吃什麼">
			</form>
		</div>
		<div class="shoppingcar">
			<a href="completebuy.php"><img src="image/shoppingcar.jpg" width="42%"></a>
		</div>
	</div>

	<div class="content">
		<div class="nomoneytitle">
			<p>查詢結果</p>
		</div>
		<?php
		mysqli_query($link,"SET NAMES utf8");
		$result = mysqli_query($link,$sql);
		$total_rows = mysqli_num_rows($result);
		if ($total_rows != 0){
			$count = 1;
			while ($row = mysqli_fetch_assoc($result)) {
				if ($count % 4 == 1) { //第一行第一筆資料
					echo "<div class = 'nomoney'>";
				}
				echo "<div class = 'nomoney1'>";
				echo "<a href='" . $row["restaurant ID"] . ".php'><img src='" . $row["picture"] . "' width=80%></a><br>";
				echo "<a href='" . $row["restaurant ID"] . ".php'>" . $row["restaurant"] . "</a>";
				echo "<p>" . $row["introduce"] . "</p>";
				echo "</div>";
				if ($count % 4 == 0) { //第一行第四筆資料
					echo "</div>";
				}
				$count += 1;
			}
		}
		else{
			echo "<div class = 'nomoney1'>";
			echo "<p>查無搜尋結果</p>";
			echo "</div>";
		}

		mysqli_close($link);

		?>
		</div>
	</div>

	<script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>