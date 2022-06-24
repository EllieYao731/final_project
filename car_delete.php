<?php
$id = $_GET["Id"];
function new_each(&$array){
   $res = array();
   $key = key($array);
   if($key !== null){
      next($array);
      $res[1] = $res['value'] = $array[$key];
      $res[0] = $res['key'] = $key;
   }else{
      $res = false;
   }
   return $res;
}
if ( isset($_COOKIE[$id]) ) {
   while ( list($name, $value) = new_each($_COOKIE[$id]) )
      setcookie($id."[".$name."]", "", time()-3600); 
}
header("Location: completebuy.php");
?>