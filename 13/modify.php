<?php
$w = ['日', '月', '火', '水', '木', '金', '土'];
$d1 = new DateTime();
$d2 = new DateTime();
$d1->modify('last day of February 2025');
$d2->modify('-10 days');

$interval = $d1->diff($d2);
$invert = $interval->invert;
$days     = $interval->days;

if ($days === 0) {
    echo '日付が同じです';
} elseif ($invert === 1) {
    echo $d1->format('Y年m月d日') . '(' . $w[$d1->format('w')] . ')の方が「' . $days . '日分」' . $d2->format('Y年m月d日') . '(' . $w[$d2->format('w')] . ')より新しいです';
} else {
    echo $d2->format('Y年m月d日') . '(' . $w[$d2->format('w')] . ')の方が「' . $days . '日分」' . $d1->format('Y年m月d日') . '(' . $w[$d1->format('w')] . ')より新しいです';
}
