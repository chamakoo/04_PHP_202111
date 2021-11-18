<?php
// 果物の配列を作成
$fruits = ['リンゴ', 'バナナ', 'ぶどう'];

// インデックス番号「2」の内容を「イチゴ」に変更し、
// インデックス番号「3」に「メロン」の要素を追加、
// インデックス番号「1」の要素を削除

$fruits[2] = 'イチゴ';
$fruits[3] = 'メロン';
unset($fruits[1]);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

echo '<pre>';
print_r($fruits);
echo '</pre>';

// 果物の値段リストを作成
$arrayList = [
    'リンゴ' => 100,
    'バナナ' => 200,
    'ぶどう' => 300
];
// 「イチゴ：400(円)」を追加
// 「リンゴ」の値段を「80(円)」に変更

$arrayList['イチゴ'] = 400;
$arrayList['リンゴ'] = 80;

echo '<pre>';
var_dump($arrayList);
echo '</pre>';

echo '<pre>';
print_r($arrayList);
echo '</pre>';
