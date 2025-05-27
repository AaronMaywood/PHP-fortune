<?php
$results = ['大吉', '小吉', '凶'];
$fortune = $results[array_rand($results)];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>今日の運勢</title>
</head>
<body>
    <h1>今日の運勢は…</h1>
    <p style="font-size:2em; color: #e67e22;">
        <?php echo $fortune; ?>
    </p>
    <form method="post">
        <button type="submit">もう一度占う</button>
    </form>
</body>
</html> 