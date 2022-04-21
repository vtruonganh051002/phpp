<a href="http://localhost/PHP/day3/get.php?id=1&cat_id=2">Sản Phẩm 1</a> 
<a href="http://localhost/PHP/day3/get.php?id=2&cat_id=2">Sản Phẩm 2 </a> 
<a href="http://localhost/PHP/day3/get.php?id=3&cat_id=2">Sản Phẩm 3</a> 
<a href="http://localhost/PHP/day3/get.php?id=4&cat_id=2">Sản Phẩm 4</a> 
<a href="http://localhost/PHP/day3/get.php?id=5&cat_id=2">Sản Phẩm 5</a> 

<?php
echo "<br>GET MEthOD <br> ";
/* //http://localhost/PHP/day3/get.php?id=1&cat_id=2
echo"<pre?>";
print_r($_GET);
echo"</pre>"; */

if(isset($_GET["id"])){
echo "id=" . $_GET["id"];
}
echo "<br>";
if(isset($_GET["cat_id"])) {
echo "cat_id = " . $_GET["cat_id"];
}
?>
ARRAY FUNCTIONS