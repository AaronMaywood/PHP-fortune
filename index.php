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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f8fafc;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', 'Segoe UI', 'Helvetica Neue', Arial, 'sans-serif';
        }
        .card {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 2.5rem 2rem 2rem 2rem;
            text-align: center;
            min-width: 320px;
        }
        h1 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #11181c;
            margin-bottom: 1.5rem;
        }
        img {
            width: 200px;
            height: auto;
            margin-bottom: 1.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        button {
            background: #11181c;
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #23272f;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>今日の運勢は…</h1>
        <img src="<?php echo $image; ?>" alt="<?php echo $fortune; ?>">
        <form method="get">
            <button type="submit">もう一度占う</button>
        </form>
    </div>
</body>
</html> 