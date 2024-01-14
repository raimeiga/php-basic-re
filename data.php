<!-- 
問題1: 4つのデータ型を全ていえ。
       さらに、それぞれの例を挙げて、そのデータを出力せよ

問題2　<body>～</body>の間に、以下の「四則演算」を行い、
       ブラウザに表示せよ
45に18を足す
30から12を引く
15に6を掛ける
30を3で割る
45を8で割った余りを求める


問題3：
4.5に1.8を足す
3から1.2を引く
1.5に0.6を掛ける
3を0.3で割る
45を8で割った余りを求める

100から99.9を引いて値を出し、その値について説明せよ

問題4：
・文字列連結の方法をいえ
・「45」と「18」を文字列型で連結させ、ブラウザにと「4518」と表示せよ
・「今日の天気は」と「晴れ」を連結させて、ブラウザに「今日の天気は晴れ」と表示せよ
　「今日の天気は」と「曇り」を連結させて、ブラウザに「今日の天気は曇り」と表示せよ 
-->

<!-- 
正解1：
文字列型 'おやすみ'
<?php
echo 'こんにちは';
echo "今日はいい天気ですね";
?>

整数型 7
<?php
echo 100;
?>

浮動小数点型 7.7
<?php
echo 0.1;
?>

論理型 true,false
<?php
echo TRUE;
echo FALSE;
?>


正解2:
<?php
         // 四則演算（整数型のみ）
         echo 45 + 18;
         echo '<br>';
         echo 30 - 12;
         echo '<br>';
         echo 15 * 6;
         echo '<br>';
         echo 30 / 3;
         echo '<br>';
         echo 45 % 8;
?>

正解3:
<?php
         // 四則演算（浮動小数点型を含む）
         echo 4.5 + 1.8;
         echo '<br>';
         echo 3 - 1.2;
         echo '<br>';
         echo 1.5 * 0.6;
         echo '<br>';
         echo 3 / 0.3;
         echo '<br>';
         // 浮動小数点型で生じる誤差の確認（結果が0.1にならない）
         echo 100 - 99.9;
         /*  正解：コンピュータが小数（浮動小数点型）の扱いを苦手なため、
                   誤差が生じる、エラーになる場合がある。なので、消費税
                   の計算など正確な結果が求められる場面では浮動小数点型
                   を使わないことを原則とする。
                  （代わりに専用の関数が使われることが多いです）*/         
?>

正解4:
・連結させたい文字列を「 . 」（ドット）でつなぐ
<?php
         // 文字列の連結
         echo '45' . '18'; //ブラウザには「4518」と出力　
                           //数字を「'」（シングルクォーテーション）で囲っているため、整数型ではなく文字列型として連結されている
         echo '<br>';
         echo '今日の天気は' . '晴れ'; 
         echo '<br>';
         echo '今日の天気は' . '曇り'; 
?> 
-->

 <!-- 正解　
    <!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // 四則演算（整数型のみ）
         echo 45 + 18;
         echo '<br>';
         echo 30 - 12;
         echo '<br>';
         echo 15 * 6;
         echo '<br>';
         echo 30 / 3;
         echo '<br>';
         echo 45 % 8;
         ?>
     </p>
     <p>
         <?php
         // 四則演算（浮動小数点型を含む）
         echo 4.5 + 1.8;
         echo '<br>';
         echo 3 - 1.2;
         echo '<br>';
         echo 1.5 * 0.6;
         echo '<br>';
         echo 3 / 0.3;
         echo '<br>';
         // 浮動小数点型で生じる誤差の確認（結果が0.1にならない）
         echo 100 - 99.9;
         /*  正解：コンピュータが小数（浮動小数点型）の扱いを苦手であり、誤差が生じる、エラーになる場合がある
                   なので、消費税の計算など正確な結果が求められる場面では浮動小数点型を使わないことを原則とする。
                  （代わりに専用の関数が使われることが多いです）*/         
         ?>
     </p>
     <p>
         <?php
         // 文字列の連結
         echo '45' . '18'; //ブラウザには「4518」と出力　
                           //数字を「'」（シングルクォーテーション）で囲っているため、整数型ではなく文字列型として連結されている
         echo '<br>';
         echo '今日の天気は' . '晴れ'; //ブラウザには「今日の天気は晴れ」と出力
         echo '<br>';
         echo '今日の天気は' . '曇り'; //ブラウザには「今日の天気は曇り」と出力
         ?>
     </p>
</body>
</html>　
-->