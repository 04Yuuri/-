<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録された会員一覧</title>
    <style>
        /* CSSスタイルは時間がないため省略 */
    </style>
</head>
<body>

<div class="container">
    <h2>登録された会員一覧</h2>
    <?php
    // ファイルからデータを読み取って表示
    $file = "data.csv";
    if (file_exists($file) && is_readable($file)) {
        echo '<table>';
        echo '<tr><th>名前</th><th>メールアドレス</th><th>都道府県</th></tr>';
        $lines = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            $fields = explode(',', $line);
            echo '<tr>';
            echo '<td>' . $fields[0] . '</td>';
            echo '<td>' . $fields[1] . '</td>';
            echo '<td>' . $fields[2] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '登録された会員はいません。';
    }
    ?>
</div>

</body>
</html>
