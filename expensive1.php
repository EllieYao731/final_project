<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <title>洋蔥牛排</title>
    <link rel="stylesheet" type="text/css" href="css/expensive1_style.css">
    <link rel="icon" href="image/icon.jpg">
    <?php
    session_start();
    if ( isset($_POST["Item"]) ) {
    $_SESSION["Quantity"] = $_POST["Quantity"];
    $id = $_POST["Item"];
    $_SESSION["ID"] = $id; 
    switch (strtoupper($id)) {
        case "E101":
        $_SESSION["Name"] = "菲力牛排";
        $_SESSION["Price"] = 600;
        break;
        case "E104":
        $_SESSION["Name"] = "帶骨蒜味牛小排";
        $_SESSION["Price"] = 470;
        break;
        case "E103":
        $_SESSION["Name"] = "冷藏板腱牛排";
        $_SESSION["Price"] = 430;
        break;
        case "E105":
        $_SESSION["Name"] = "德國豬腳佐自家醃漬泡菜";
        $_SESSION["Price"] = 470;
        break; 
        case "E106":
        $_SESSION["Name"] = "牛肝菌素燉飯";
        $_SESSION["Price"] = 250;
        break; 
        case "E109":
        $_SESSION["Name"] = "牛肉野菇牛肝菌燉飯";
        $_SESSION["Price"] = 250;
        break; 
        case "E107":
        $_SESSION["Name"] = "海鮮青醬燉飯";
        $_SESSION["Price"] = 290;
        break; 
        case "E108":
        $_SESSION["Name"] = "香蒜鮭魚炒飯";
        $_SESSION["Price"] = 290;
        break; 
        case "E102":
        $_SESSION["Name"] = "法式牛小排";
        $_SESSION["Price"] = 609;
        break; 
        }
    header("Location: car_savecart.php");  // 轉址
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
   <form name = "search" method = "post" action = "foods_search.php"><input type="text" id="search" name="search" placeholder="你想吃什麼"></form>
  </div>
  <div class="shoppingcar">
      <a href="completebuy.php"><img src="image/shoppingcar.jpg" width="42%"></a>
  </div>
 </div>

 <a name="information">
 <div class="content">
  <div class="photo">
   <img src="image/expensive1-1.jpg" width="100%" height="450px">
  </div>
  </a>

  <div class="information">
   <span class="information1">
    <b>洋蔥牛排</b>
   </span>
   <span class="information2">
    <p>洋蔥天母店是全台創始店，餐廳主打牛排排餐，是間老字號的西式餐廳。</p>
   </span>
   <span class="information3">
    <p>營業時間：週一至周日11:30~22:00</p>
   </span>
   <span class="information4">
    <p><a href="tel:02-2877-2591">電話：02-2877-2591</a></p>
    <br>
   </span>
   <span class="information5">
    <p><a href="https://www.google.com.tw/maps/place/111%E5%8F%B0%E5%8C%97%E5%B8%82%E5%A3%AB%E6%9E%97%E5%8D%80%E5%BF%A0%E8%AA%A0%E8%B7%AF%E4%BA%8C%E6%AE%B5132%E8%99%9F/@25.114058,121.532137,3a,75y,241.86h,87.3t/data=!3m7!1e1!3m5!1sBJO34QXkp39BOKkFk9o_8A!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DBJO34QXkp39BOKkFk9o_8A%26cb_client%3Dsearch.gws-prod.gps%26w%3D86%26h%3D86%26yaw%3D317.03888%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192!4m5!3m4!1s0x3442ae81452f5ce3:0x5e158b4742135e82!8m2!3d25.1141523!4d121.5320249?hl=zh-TW" target="blank">地址：台北市士林區忠誠路二段132號(點我可看地圖)</a><p>
   </span>
   <a name="recommend">
  </div>

  <div class="recommend">
   <div class="recommenddish">
    <p>推薦餐點</p>
   </div>
   <div class="re">
    <div class="re1">
     <img src="image/expensive1-2.jpg">
    </div>
    <div class="re2">
     <img src="image/expensive1-3.jpg">
    </div>
    <div class="re3">
     <img src="image/expensive1-4.jpg">
    </div>
   </div>
   <div class="rename">
    <div class="rename1">
     <p>冠軍肋眼牛排 $650</p>
    </div>
    <div class="rename2">
     <p>德國豬腳佐醃漬泡菜 $470</p>
    </div>
    <div class="rename3">
     <p>冷藏板腱牛排 $430</p>
    </div>
   </div>
  </div>

  <a name="menu">
  <div class="menu">
   <div class="startorder">
    <p>開始訂餐</p>
   </div>
   <div class="menus">
    <form action="expensive1.php" method="post" style="margin-left: auto; margin-right: auto">
     <select name = "Item" style="width: 300px; height: 45px; outline: none; font-size:16px; margin-right: 20px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;">
      <option disabled="true" selected="true" >請選擇餐點</option>
      <optgroup label="主餐">
       <option value="E101">菲力牛排 $600</option>
       <option value="E102">法式小羊排 $690</option>
       <option value="E103">冷藏板腱牛排 $430</option>
       <option value="E104">帶骨蒜味牛小排 $470</option>
       <option value="E105">德國豬腳佐醃漬泡菜 $470</option>
      </optgroup>
      <optgroup label="燉飯">
       <option value="E106">牛肝菌素燉飯 $250</option>
       <option value="E107">海鮮青醬燉飯 $290</option>
       <option value="E108">香蒜鮭魚炒飯 $290</option>
       <option value="E109">牛肉野菇牛肝菌燉飯 $290</option>
      </optgroup>
      <input type="number" name="Quantity" value="1" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px;" min="0" max="15">
     </select>
      <button type="submit" value="訂購" style="height: 45px; outline: none; font-size:16px; margin-right: 10px; border:2px solid #fcc7a1; border-radius: 1px; padding: 10px; background-color: #f19755;">訂購</button> 
 <!--     <button type="submit" value="value" onclick="getElementById('order').style.display ='block'" style="width: auto;" class="mealsubmit">送出</button> -->
    </form>
   </div>
   <div class="submit">
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
     <img src="image/people2.jpg" width="20%">
    </div>
    <div class="comment1content">
     <div class="comment1name">
      <p>Coco</p>
     </div>
     <div class="comment1words">
      <p>年輕時代吃到現在，口味還是一樣好吃。</p>
     </div>
    </div> 
   </div>
   <div class="comment2">
    <div class="comment2photo">
     <img src="image/people6.jpg" width="20%">
    </div>
    <div class="comment2content">
     <div class="comment2name">
      <p>Hank</p>
     </div>
     <div class="comment2words">
      <p>烤雞腿真的很大隻，還不錯，板鍵牛排肉質嫩，算是會定期參訪的店。</p>
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
    <form method="post" action="expensive1.php">
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
     <a href="expensive4.php"><img src="image/expensive4-1.jpg" width="100%">
     <span class="other1name">
      <p>熱浪島南洋蔬食茶堂</p>
     </span>
     </a>
    </div>
    <div class="space"></div>
    <div class="other2">
     <a href="expensive2.php"><img src="image/expensive2-1.jpg" width="100%">
     <span class="other1name">
      <p>小倉庫食研所</p>
     </span>
     </a>
    </div>
   </div>
  </div>
 </div>
 <script type="text/javascript" src="js/HomePage.js"></script>

</body>
</html>