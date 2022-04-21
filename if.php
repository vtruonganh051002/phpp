<?php
//cho 2 so x,y, hay so sang hai so xy
// nếu: x < y thì in ra x nhỏ hơn y 
// nếu x>y thì in ra x lớn hơn y
//nếu: x = y thì in ra x bằng y
/* $x = 10;
$y = 20;
if($x < $y){
    echo "x nhỏ hơn y";
}else if($x > $y ){
    echo "x lớn hơn y";

}else{
    echo "x bằng y";
} */
/*
NESTED IF
*/
// hãy kiểm tra một số nguyên x xem nó là số nguyên dương hay nguyên âm
//Nếu x là số nguyên dương chẵn hay lẻ.
// nếu x là số nguyên âm thì in ra x là số nguyên âm
$x = 10;
if($x > 0){
    if($x % 2 == 0){
        echo "so nguyen duong chan";

    }else{
        echo " so nguyen duong le";
    }
}else{
    echo " so nguyen duong am";
}
?>