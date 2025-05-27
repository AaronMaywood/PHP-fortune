<?php
$results = [
    '大吉' => 'images/daikichi.png',
    '中吉' => 'images/chuukiti.png',
    '凶' => 'images/kyou.png'
];
$keys = array_keys($results);
$fortune = $keys[array_rand($keys)];
$image = $results[$fortune];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>今日の運勢</title>
</head>
<body>
    <h1>今日の運勢は…</h1>
    <img src="<?php echo $image; ?>" alt="<?php echo $fortune; ?>" style="width:200px; height:auto;">
    <form method="get">
        <button type="submit">もう一度占う</button>
    </form>
</body>
</html> 