



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
         // 配列に値を代入する
         $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
 
         // 配列の値を出力する  print_r()関数＝指定した変数に関する情報をわかりやすく出力する関数
         print_r($user_names);
 
         // 改行する
         echo '<br>';
 
         // 2番目の要素を更新する
         $user_names[1] = '侍花子';
 
         // 末尾に要素を追加する
         $user_names[] = '侍五郎';
 
         // 配列の値を出力する  print_r()関数＝指定した変数に関する情報をわかりやすく出力する関数
         print_r($user_names);

         // 改行
         echo'<br>';

         // 3番目の要素（'侍二郎'）を出力
         echo $user_names[2];

         ?>
     </p>
 </body>
 
 </html>