<?php
$text = 'PHP　MySQL　Laravel';

/* http://example.com?0=PHP&1=MySQL&2=Laravel */

$alph = 'A-B-C';

/* A | B | C | D | 4個 */

$arr = explode('-', $alph);
// $num = array_push($arr, 'D');
array_push($arr, 'D');
$num = count($arr);
array_push($arr, $num . '個');
$result = implode(' | ', $arr);
echo '<pre>';
print_r($_SERVER);
echo '</pre>';

// echo $num;
?>

<?= 'http://example.com?' . http_build_query(explode('　', $text))?><br>
<?=$result?>
