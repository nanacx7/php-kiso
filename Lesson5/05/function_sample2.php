<?php
function test() {
    $a = 10;
    return $a; //returnで$aを返り値として戻す
}
$a = test(); //$aに返り値を代入
echo $a;