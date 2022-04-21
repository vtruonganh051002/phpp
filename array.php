<?php
$fruits = array();//ham tao ra mang rong
//cách 1
$fruits[] = " Banana";//them phan tu vao mang
$fruits[] = " Apple ";
$fruits[] = " Orange ";

/* $fruits[] = " Banana";//them phan tu vao mang
$fruits[] = " Apple ";//key tự tăng
$fruits[] = " Orange ";//key bên tay trái, value phải


echo "<pre>"; // <pre>: thẳng hàng 
print_r($fruits);//in cấu trúc mảng
echo "</pre>";
//cách 2
$fruits = array(
    'fruit1' => "banana",
    'fruit2' => "Apple",
    'fruit3' => "Orange"
);
echo "<pre>"; 
print_r($fruits);
echo "</pre>";

$fruits = array(
    "banana",
    "Apple",
    "Orange"
);
echo "<pre>"; 
print_r($fruits);
echo "</pre>";
//cách 3
//cách khai báo trực tiếp, đa số sử dụng cách này
$cars = [
    1 => "toyota",
    2 => "BMW",
    3 => "Kia"
];
echo "<pre>"; 
print_r($cars);
echo "</pre>";

$cars1 =[];
$cars1[] ="toyota";
echo "<pre>"; 
print_r($cars);
echo "</pre>";

$cars = [
    "xe 1" => "toyota",
    "BMW",
    "xe 2" => "Kia",
    "Thang Hoang ngu"
];
echo "<pre>"; 
print_r($cars);
echo "</pre>"; */

for($i = 0; $i < 3; $i++){// 0,1,2
    if($i==1){
        $fruits[$i] = "abcxyz";
    }
   
}
echo "<pre>"; 
print_r($fruits);
echo "</pre>";
/* 
foreach($variables as $key => $value ){
    #code...
} */
foreach($fruits as $k_fr => $fr){//duyệt vòng lặp trong php// $fr : $fruit
    echo $k_fr. " - " .$fr."<br>";//" - " đấu gạch ngang đc in ra
}

?>