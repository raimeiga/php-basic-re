
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
        // 変数$numに0～4までのランダムな整数を代入する
        $num = mt_rand(0, 4);
        // 問:変数$numの値を出力する（確認用）
        echo $num;
        echo '<br>';


        // 問:変数$numの値が4であれば、「大当たりです」という文字列を出力するコードを書け
        //  それ以外のときは、「はずれです」という文字列を出力するコードを書け
        
       
       
       ?>
    </p>
 </body>
</html>
   