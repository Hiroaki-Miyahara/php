<?php
$a = 7;

$result = ($a === 7) ? "TRUE" : "FALSE";
echo $result;
echo "<br />";

$people = "Saburo";

switch($people){
    case "Taro":
    echo "太郎です";
    break;
    case "Jiro":
    echo "二郎です";
    break;
    case "Saburo":
    echo "三郎です";
    break;
}