<?php 
include_once "../base.php";
$movie=$Movie->find($_GET['id']);
$date=$_GET['date'];

if($date!=date("Y-m-d") || date("G")<14){
    $s=5;
}else{
    $s=5-ceil((date("G")-13)/2);
}
for($i=1;$i<=5;$i++){
    echo "<option value='$i'>{$ss[$i]} 剩餘座位 </option>";
}