<?php
$d1 = new DateTime();
$d2 = new DateTime();
$d1->modify('last day of February 2025');
$d2->modify('-10 days');

$interval = $d1->diff($d2);
$invert = $interval->invert;
$days     = $interval->days;

/**
 * DateTimeのインスタンスを受けて
 * 日付の日本語フォーマットを返す関数
 *
 * @param object $dayObj
 * @return string
 */
function getToday(object $dayObj): string
{
    $w = ['日', '月', '火', '水', '木', '金', '土'];
    return $dayObj->format('Y年m月d日') . '(' . $w[$dayObj->format('w')] . ')';
}

if ($days === 0) {
    echo '日付が同じです';
} elseif ($invert === 1) {
    echo getToday($d1) . 'の方が「' . $days . '日分」' . getToday($d2) . 'より新しいです';
} else {
    echo getToday($d2) . 'の方が「' . $days . '日分」' . getToday($d1) . 'より新しいです';
}
