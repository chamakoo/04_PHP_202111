<?php

$prices = [298, 129, 198, 274, 625, 273, 296, 325, 200, 127, 398];
// 表示結果： 3,457円

/**
 * 購入商品価格の配列を指定すると、
 * 10%の税込み価格を返す
 *
 * @param array $pricesArr 価格の配列
 * @return integer 税率を含めた価格
 */
function getPriceInTax (array $pricesArr): int
{
    $total = 0;
    foreach ($pricesArr as $price) {
        $total += $price;
    }
    return $total * 1.1;
}

echo number_format(getPriceInTax($prices)) . '円';

echo dirname(__FILE__);
