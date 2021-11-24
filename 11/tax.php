<?php
$prices = [298, 129, 198, 274, 625, 273, 296, 325, 200, 127, 398];
// 表示結果： 3,457円


function getPriceInTax ($pricesArr)
{
    $total = 0;
    foreach ($pricesArr as $price) {
        $total += $price;
    }
    return $total * 1.1;
}

echo number_format(getPriceInTax($prices)) . '円';
