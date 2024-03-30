<?php
// POSTデータから値を取得
$name = $_POST['name'];
$email = $_POST['email'];
$prefecture = $_POST['prefecture'];

// データを文字列に整形
$data = "$name,$email,$prefecture\n";

// ファイルにデータを追加する
$file = fopen("data.csv", "a");
fwrite($file, $data);
fclose($file);

// 登録後、index.php にリダイレクト
header('Location: index.php');
exit;
?>
