<?php

$people = [
    ['Taro',25,'men'],
    ['Jiro',20,'men'],
    ['hanako',16,'women']
];

foreach ($people as $people){
    echo $people[0] . '(' . $people[1] . '歳' . $people[2] . ')'. '<br />';
}