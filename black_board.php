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
 
 <body>
     <p>  <!-- ココに正解を -->
     <?php
$personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];

echo $personal_data['gender'];
?>



     </p>
 </body>
 
 </html>