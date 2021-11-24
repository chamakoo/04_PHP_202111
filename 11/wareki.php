<?php
// daclare(strict_types = 1);
$seireki = '';
if (!empty($_POST)) {
    $seireki = $_POST['seireki'];

    /**
     * 4桁の年数を受け取り和暦に変換
     *
     * @param integer | string $seireki
     * @return string | null
     */
     function getWareki(int | string $seireki): ?string
    {
        if (empty($seireki)) return false;

        if (!is_numeric($seireki) || $seireki < 1868) {
            $result = '未対応';
        } else {
            if ($seireki < 1912) {
                $year = $seireki - 1867;
                if ($year === 1) {
                    $result = '明治元年';
                } else {
                    $result = '明治' . $year . '年';
                }
            } elseif ($seireki < 1926) {
                $year = $seireki - 1911;
                $result = '大正' . ($year === 1 ? '元' : $year) . '年';
            } elseif ($seireki < 1989) {
                $year = $seireki - 1925;
                $result = '昭和' . ($year === 1 ?? '元') . '年';
            } elseif ($seireki < 2019) {
                $year = $seireki - 1988;
                if ($year === 1) $year = '元';
                $result = '平成' . $year . '年';
            } else {
                $year = $seireki - 2018;
                $result = '令和' . $year . '年';
            }
        }
        return $result;
    }

    $result = getWareki($seireki);
}

/**
 * XSS対策の参照名省略
 *
 * @param string string
 * @return string
 *
 */
function h(?string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>西暦⇒和暦変換</title>
</head>

<body>
    <h1>西暦⇒和暦変換</h1>
    <p>西暦を入力し、「送信」ボタンを押してください。</p>
    <form action="" method="post" novalidate>
        西暦：<input type="text" name="seireki" size="4" maxlength="4" value="<?= h($seireki) ?>">年
        <p><input type="submit" value="計算"></p>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] === "POST") : ?>
        西暦<?= h($seireki) ?>年は、<?= h($result) ?>です。
    <?php endif; ?>
</body>

</html>
