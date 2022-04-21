<?php 
$hostname = 'locallhost';
$username = 'root';
$password = '';
$database = 'mobile_shop_d06';
$conn = mysqli_connect($hostname, $username,$password ,$database );

if(!$conn){
    die("Ket noi that bai". mysqli_connect());
}
$sql = "SELECT*FROM users";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_array($query)){
        echo $row['user_email']."<br>";
    }
}
?>