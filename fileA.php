<?php
require "fileA.php"; 

/*goi file A vao trong file B
khi goi ham require nhieu hon 2 lan thi se bi loi 
 */
// require_once "fileA.php";
//require_once "fileA.php";
//require_once "fileA.php";
/* include
goi file A vao trong file B
khi goi ham requre_once nhieu hon 2 lan
khong co loi xay ra nhu o require */
include "fileA.php";
include_once "";
require_once "fileA.php";
require_once "fileA.php";
require_once "fileA.php";

?>