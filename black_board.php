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
   <p>
   <?php
      $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

      // 2番目の要素である「侍一郎」という文字列が出力される
      echo $user_names[1];
      
?>
   </p>