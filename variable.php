<!-- 
<body>～</body>の間に
問題1：1つのphpタグ内で
・「侍太郎」を値とした変数（命名規則はスネークケース）を記述し、
　　ブラウザに出力せよ
・変数の値に「侍花子」を再代入し、ブラウザに出力せよ

問題2：1つのphpタグ内で
・3を代入した変数（命名規則はスネークケース）を書き、
　変数から1.2を引いて、ブラウザに1.8を出力せよ
・侍一郎を代入した変数を書き、その変数と文字列を連結して、
　「私の名前は侍一郎です。」とブラウザに出力せよ 
・文字列の中で変数の中身を表示する方法をいえ。
  さらに、その方法を用いて、「私の名前は侍一郎です。」とブラウザに出力せよ
　　　


　「
-->

正解1:
<?php
         // 変数に値を代入する
         $user_name = '侍太郎';
 
         // 変数の中身を出力する
         echo $user_name;  //ブラウザに「侍太郎」と出力される

         echo '<br>';
 
         // 変数に値を再代入する
         $user_name = '侍花子';
 
         // 変数の中身を出力する
         echo $user_name;         
?>

正解2:
<?php
         // 変数に値を代入する
         $number = 3;
 
         // 変数と数値を計算し、その結果を出力する
         echo $number - 1.2;
 
         // 改行する
         echo '<br>';
 
         // 変数に値を代入する
         $my_name = '侍一郎';
 
         // 変数と文字列を連結し、その結果を出力する
         echo '私の名前は' . $my_name . 'です。';

         echo '<br>';   
        //  文字列をダブルクォーテーション"で囲み、変数を波括弧{}で囲む
         echo "私の名前は{$my_name}です。";
?>



<!--  　
     <!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // 変数に値を代入する
         $user_name = '侍太郎';
 
         // 変数の中身を出力する
         echo $user_name;  //ブラウザに「侍太郎」と出力される

         echo '<br>';
 
         // 変数に値を再代入する
         $user_name = '侍花子';
 
         // 変数の中身を出力する
         echo $user_name;
         
         ?>
     </p>
     <p>
         <?php
         // 変数に値を代入する
         $number = 3;
 
         // 変数と数値を計算し、その結果を出力する
         echo $number - 1.2;
 
         // 改行する
         echo '<br>';
 
         // 変数に値を代入する
         $my_name = '侍一郎';
 
         // 変数と文字列を連結し、その結果を出力する
         echo '私の名前は' . $my_name . 'です。';
         
         // 改行する
          echo '<br>';
 
          // 文字列の中で変数の中身を表示する（変数展開）"  "で囲む（ダブルでないとダメ、シングル' 'だと正しく動作しない）。
          echo "私の名前は{$my_name}です。"; 
         ?>
     </p>
 </body>
 
 </html> -->