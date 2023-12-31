<!-- 
7.2 配列とは 
問題1:配列とは何か？　 

7.3 配列の作り方・使い方
問題2:配列の書き方の注意点を３つ言え

問題3:変数と配列の違いを、例を挙げて説明せよ。

問題4:要素が文字列型と整数型の配列を２種類書き、出力せよ
文字列型の要素：侍太郎、侍一郎、侍二郎、侍三郎、侍四郎
整数型の要素：36、33、29、25、22

問題5:＜配列の取得＞
・インデックスとは何かを説明し、配列の要素を取得する構文を書け。
・4で作った配列$user_namesの'侍一郎'という要素を取得し、ブラウザに表示させろ

問題6:＜配列の更新・追加＞
・4で作った配列$user_namesの全ての値を出力せよ。
　echo文は配列の中身全体を出力することはできないので、print_r()関数で出力せよ

・配列の要素を更新する構文を書け
  4で作った配列$user_namesの'侍一郎'を、「侍花子」に更新せよ
・配列の要素を末尾に追加する構文を書け
  4で作った配列$user_namesの6番め（末尾）の要素に、「侍五郎」を追加せよ（２つの書き方）
・「侍花子」に更新、「侍五郎」を追加した配列を出力せよ。
・'侍二郎'のみを出力せよ
         

 
正解1:複数のデータのまとまり

正解2:
A:配列名は複数形
B:[  ]の中身を要素といい、[  ]の中にカンマ区切りで順番に値を入れる
c:出力は、print_r(); で行う。echo文は配列の要素全てを出力できない.

正解3:
変数＝1つのデータのみ入っている
$user_name='侍太郎';

配列＝複数のデータが入っている
$user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
正解4:
<?php
        $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
        print_r($user_names);

        // 改行する
        echo '<br>'; 

        $user_ages = [36, 33, 29, 25, 22];
        print_r($user_ages);
?>        

正解5:
・インデックス＝配列の各要素に「0」から順番に振られている番号
　配列の要素を取得する構文　echo 配列名[取得する要素のインデックス];
・
<?php
$user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

// 2番目の要素である「侍一郎」という文字列が出力される
echo $user_names[1];
?>

正解6:
<?php
$user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
print_r($user_names);
echo '<br>'; 

// 要素更新の構文　配列名[更新される要素のインデックス]＝更新するデータ；
$user_names[1] = '侍花子';  //2番目の要素を更新

// 要素を末尾に追加する構文　配列名[末尾の要素のインデックス＋１の数]＝追加するデータ；
$user_names[5] = '侍五郎';  //6番目に要素を追加する
print_r($user_names);

echo '<br>'; 

// 末尾に要素を追加するもう１つの書き方
$user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
$user_names[] = '侍五郎';
print_r($user_names);

echo '<br>'; 

// 要素'侍二郎'を出力せよ
echo $user_names[2];
?>
-->

<!-- <!DOCTYPE html>
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
 
 </html> -->