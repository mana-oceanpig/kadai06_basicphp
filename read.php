<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Login</title>
</head>
<body>
    
</body>
</html>
<?php
$csv_file = "data.csv";
echo "<table border='1'>
<p>本来はここには飛ばさない。裏で確認するためのページ。課題のため飛ばしています。</p>
<tr>
<th>名前</th>
<th>メールアドレス</th>
<th>規約同意</th>
</tr>";

$file = fopen($csv_file, "r");
    while(($data = fgetcsv($file)) !== FALSE) {
    echo "<tr>";
    echo "<td>".$data[0]."</td>";
    echo "<td>".$data[1]."</td>";
    echo "<td>".$data[2]."</td>";
    echo "</tr>"; 
    }
    fclose($file);
    echo "</table>";
?>