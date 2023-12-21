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
       $user_names= ['侍太郎','侍一郎','侍二郎','侍三郎','侍四郎' ];
       print_r($user_names);

       echo '<br>';
       //配列名［更新したい要素のインデックス］＝更新データ;
       $user_names[1]='侍花子';
       $user_names[5]='侍五郎';
       print_r($user_names);
       echo '<br>';
       $user_names= ['侍太郎','侍一郎','侍二郎','侍三郎','侍四郎' ];
       $user_names[ ]='侍五郎';
       print_r($user_names);
       echo '<br>';
       $user_names= ['侍太郎','侍一郎','侍二郎','侍三郎','侍四郎' ];
        echo $user_names[2];

?>


  </p>

   </p>
 <body>
</html>
   