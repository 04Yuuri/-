<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <style>
        /* CSSスタイルは時間がないため省略 */
    </style>
</head>
<body>

<div class="container">
    <h2>会員登録</h2>
    <form action="write.php" method="post">
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">メールアドレス:</label><br>
        <input type="text" id="email" name="email" required><br>
        <label for="prefecture">出身:</label><br>
        <input type="text" id="prefecture" name="prefecture" required><br>
        </select><br>
        <input type="submit" value="登録">
    </form>
</div>

</body>
</html>
