<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<title>結帳囉！</title>
	<link rel="stylesheet" type="text/css" href="css/completebuy_style.css">
	<link rel="icon" href="image/icon.jpg">
</head>
<body>
<div class="shoppingcar">
	<div id="idshop" class="shoppinglist">
		<form class="shoppingcontent animate" action="completebuy.html" method="">
			<div class="scroll">
				<table style="margin-left: auto; margin-right: auto; border:2px solid transparent;">
					<tr>
						<td style="width: 100px;"><b>店家編號</b></td>
						<td style="width: 300px;"><b>餐點</b></td>
						<td style="text-align: center; width: 70px;"><b>價格</b></td>
						<td style="width: 45px;"><b>數量</b></td>
						<td></td>
					</tr>
<?php
$flag = false;
$total = 0;
function new_each(&$array){
	$meal = array();
	$key = key($array);
	if ($key !== null) {
		next($array);
		$meal[1] = $meal["value"] = $array[$key];
		$meal[0] = $meal["key"] = $key;
	} else {
		$meal = false;
	}
	return $meal;
}
while ( list($arr, $value) = new_each($_COOKIE)) {
	if (isset($_COOKIE[$arr])&& is_array($_COOKIE[$arr])) {
		if ($flag) {
			$flag = false;
			$color = "#FFF";
		} else {
			$flag = true;
			$color = "#FFEFE3";
		}
		echo "<tr bgcolor = '".$color."'>";

	    $price = 0;
	    $quantity = 0;
	    while ( list($name, $value)=new_each($_COOKIE[$arr])) {
	    	if ($name == "ID") {
	    		$shopID = substr($value, 0, 2);
	    		switch ($shopID) {
	    			case 'E1':
	    				$shop = "expensive1.php";
	    				break;
	    			case 'E2':
	    				$shop = "expensive2.php";
	    				break;
	    			case 'E3':
	    				$shop = "expensive3.php";
	    				break;
	    			case 'E4':
	    				$shop = "expensive4.php";
	    				break;
	    			case 'G1':
	    				$shop = "glutton1.php";
	    				break;
	    			case 'G2':
	    				$shop = "glutton2.php";
	    				break;
	    			case 'G3':
	    				$shop = "glutton3.php";
	    				break;
	    			case 'G4':
	    				$shop = "glutton4.php";
	    				break;
	    			case 'H1':
	    				$shop = "happy1.php";
	    				break;
	    			case 'H2':
	    				$shop = "happy2.php";
	    				break;
	    			case 'H3':
	    				$shop = "happy3.php";
	    				break;
	    			case 'H4':
	    				$shop = "happy4.php";
	    				break;
	    			case 'N1':
	    				$shop = "nomoney1.php";
	    				break;
	    			case 'N2':
	    				$shop = "nomoney2.php";
	    				break;
	    			case 'N3':
	    				$shop = "nomoney3.php";
	    				break;
	    			case 'N4':
	    				$shop = "nomoney4.php";
	    				break;
	    			
	    		}
	    		echo "<td style='text-align:left;'> <a href='$shop' style='text-decoration: none; color: #111;'>".$value."</a></td>";
	    	}
	    	if ($name == "Name") {
	    		echo "<td style='text-align:left;'>".$value."</td>";
	    	}
	    	if ($name == "Price") {
	    		$price = $value;
	    		echo "<td style='text-align:right;'>".$value."</td>";
	    	}
	    	if ($name == "Quantity") {
	    		$quantity = $value;
	    		echo "<td style='text-align:right;'>".$value."</td>";
	    	}
	    }
	    $total += $price * $quantity;
	    echo "<td style='text-align: center;'><a style='text-decoration: none; color: #FFF; background-color: #D97227;'href='car_delete.php?Id=".$arr."'>";
	    echo "刪除</a></td>";
	    echo "</tr>";
	}	
}


?>
				</table>
			</div>
			<hr>
			<div class="money">
				累積金額
<?php
if ($total != 0) {
	echo "<tr background-color = yellow<td colspan = 5; aligh = right>";
	echo " = NT$".$total."元</td></tr>";
}
?>
			</div>
			<div class="againorbuy">
				<a href="HomePage.php"><p>回到主畫面</p></a>
			</div>
		</form>
	</div>
</div>

</body>
</html>