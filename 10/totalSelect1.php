<?php
$arr   = '';
$num   = '';
$total = 0;
$numArr = [
    [30, 65, 72, 47, 63, 96],
    [35, 57, 67, 23, 14, 56, 61],
    [46, 16, 27, 58],
    [84, 27, 40, 18, 92, 46, 21],
    [14, 74, 54, 2, 85]
];

if (!empty($_POST)) {
    // ユーザがどの配列を選択しているか0~4
    $arr = $_POST['arr'];
    // 配列に掛ける数値（２桁）
    $num = $_POST['num'];

    for ($i = 0; $i < count($numArr[$arr]); $i++) {
        $total += $numArr[$arr][$i];
    }

    if (!is_numeric($num)){
        $result = '数値を入力してください';
    } elseif ($num < 0 || $num > 99) {
        $result = '1から99までの数値を入力してください';
    } else {
        $result = $total * $num;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>合計値の計算</title>
</head>

<body>
    <h1>合計値の計算</h1>
    <form action="" method="post" novalidate>
        <p>配列の選択：
            <select name="arr">
                <option <?= $arr == 0 ? 'selected' : ''; ?> value="0">配列1</option>
                <option <?= $arr == 1 ? 'selected' : ''; ?> value="1">配列2</option>
                <option <?= $arr == 2 ? 'selected' : ''; ?> value="2">配列3</option>
                <option <?= $arr == 3 ? 'selected' : ''; ?> value="3">配列4</option>
                <option <?= $arr == 4 ? 'selected' : ''; ?> value="4">配列5</option>
            </select>
        </p>
        <p>掛ける数値：
            <input type="text" name="num" size="2" maxlength="2" value="<?= htmlspecialchars($num, ENT_QUOTES, 'UTF-8'); ?>">
        </p>
        <p><input type="submit" value="計算"></p>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
        合計結果：<?=htmlspecialchars($result, ENT_QUOTES, 'UTF-8');?>
    <?php endif; ?>
</body>

</html>
