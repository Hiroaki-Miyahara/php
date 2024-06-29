<?php

$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$radio = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $my_name . "<br />";
print "ご希望の商品は、" . $radio . "<br />";
print "注文数は、" . $number . "<br />";


// $company = htmlspecialchars($_GET['company'], ENT_QUOTES);
// print "会社名は" . $company . "ですね";