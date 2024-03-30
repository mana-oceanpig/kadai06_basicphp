<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write</title>
</head>
<body>

<?php
$name = $_POST['name'];
$email  = $_POST['email'];
$check = $_POST['checkbox1'];
$c = ",";
$str = $name.$c.$email.$c.$check;

$file = fopen("data.csv","a");
fwrite($file, $str."\n");
fclose($file);

header("Location: read.php"); //本来ここにページ遷移すべきではないが、課題提出のため、いったんここに画面遷移させる
exit;
?>

</body>
</html>