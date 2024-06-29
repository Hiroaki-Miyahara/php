<?php
// function text($number1, $number2){
//     $value = $number1 + $number2;
//     return $value;
// }

// $total = text(2,3);
// echo $total;

// function Totalpoints($score1,$score2,$score3)
// {
//     $scoretotal = $score1 + $score2 + $score3;
//     if ($scoretotal > 210){
//         echo "合計点は" . $scoretotal . "なので合格です";
//     }else{
//         echo "合計点は" . $scoretotal . "なので不合格です";
//     }
// }
// echo (Totalpoints(80,60,90));

function TriangleArea($botoom,$height1)
{
    return $botoom * $height1 / 2;
}
function SquareArea($height2,$width)
{
    return $height2 * $width;
}
function TrapezoidArea($upbottom,$btmbottom,$height3)
{
    return ($upbottom + $btmbottom) * $height3 / 2;
}
echo (TriangleArea(7,8)) . "\n";
echo (SquareArea(5,5)) . "\n";
echo (TrapezoidArea(4,5,4));