
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
   <?php
      for($i = 1; $i<=10; $i += 1){
         echo $i.'<br>';
      
      if( $i === 5){
         break;
      }
     }
   ?>

 </body>
</html>
   