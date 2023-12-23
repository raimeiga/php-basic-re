<!--反復の順番
index.php（php文の書き方）
data.php（データ型と四則演算）　
variable.php（変数）
array.php（配列）
associative-array.php（連想配列）
-->


<!-- 答え合わせをブラウザでやるときのURL↓
http://localhost/php-basic-re/black_board.php 
-->
<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
  <p>
  <?php
$personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];

echo $personal_data['gender']; //男性を取得し、出力

echo '<br>';  
$personal_data['age'] = 37;  // 'age'というキーの値を更新
$personal_data['address'] = '東京都';  // 新しく要素（キーと値）を追加

print_r($personal_data);   //全てを出力
?>

  </p>

   </p>
 <body>
</html>
   