<!-- 
問題1:連想配列とは何か説明せよ

問題2:配列（2）に対する連想配列（3）の優位性を説明せよ

問題3:
・次の連想配列で「キー」と「値」はどの部分か？
$personal_data = ['name' => '侍太郎',  'age' => 36,  'gender' => '男性',  'address' => '東京都'];

・キーの意味と役割をいえ
・要素とは何か


問題4:連想配列の構文と、例文を１つ書け

＜値の取得＞
問題5:連想配列の値を取得する構文を書き、次の連想配列の値「男性」を取得し、出力せよ

<?php
$personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];
?>

＜値を更新・追加＞
問題6:
・次の連想配列の'age'というキーの値「36」を「37」に更新し、出力せよ
・次の連想配列に「address」というキーと、「東京都」という値を追加し、（末尾に追加しかできない）出力せよ

<?php
$personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];
?>
-->


正解1:データ名（キー）とデータ（値）が連なっている配列

正解2:
同種類の複数要素で構成される配列（1）ならば把握できるが、
異なる種類の複数要素で構成される配列（2）は把握・管理にしくいので、
種類別に要素が整理されている連想配列（3）の方が管理しやすい。

(1)複数の同種類データ（要素）をまとめて入れている配列
$user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

(2)異なる種類のデータ（要素）をまとめて入れている配列
$personal_data = ['侍太郎', 36, '男性', '東京都', '020-0304-0506',
 '侍花子', 33, '女性', '京都府', '999-9999-9999'];

(3)連想配列 データ名とデータ（要素）が連なっている配列
データ名をつけられるので、異なる種類のデータも格段に管理しやすい
$personal_data1 = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性', 
'address' => '東京都', 'phone_number' => '070-0809-1160'];
$personal_data2 = ['name' => '侍花子', 'age' => 33, 'gender' => '女性', 
'address' => '京都府', 'phone_number' => '999-9999-9999'];

正解3:
------------------------------------------------------------
$personal_data = ['name' => '侍太郎',  'age' => 36,  'gender' => '男性',  'address' => '東京都'];
                 | キー |   |  値  |
------------------------------------------------------------
・意味:値が何を表すのかわかりやすく名前をつけたもの（DBのテーブルのカラム名みたいなものかな）
  役割:値の管理（ってことにしておく）
       連想配列は、値にキーを付けて管理 ⇔ 配列は、値にインデックス（番号）を付けて管理
・要素＝［キー＋値］のセット

正解4:

構文
------------------------------------------------------------
$配列名＝['キー1' => 値1, 'キー2' => 値2, 'キー3' => 値3, ……];
------------------------------------------------------------
キーを ’   ’（シングルクォーテーション）で囲む
キーと値を「=>」（ダブルアロー演算子）で結ぶ

例文:$personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];

＜値の取得＞
正解5:
構文:連想配列名['キー名']
------------------------------------------------------------
<?php
$personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];

echo $personal_data['gender']; //男性を取得し、出力
?>
------------------------------------------------------------

正解6:
------------------------------------------------------------
<?php
$personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];

$personal_data['age'] = 37;  // 'age'というキーの値を更新
print_r($personal_data);    //出力

echo '<br>';  // 改行する

$personal_data['address'] = '東京都';  // 新しく要素（キーと値）を追加
print_r($personal_data);   //出力
?>
------------------------------------------------------------



// <!DOCTYPE html>
//  <html lang="ja">
 
//  <head>
//      <meta charset="UTF-8">
//      <title>PHP基礎編</title>
//  </head>
 
//  <body>
//      <p>
//          <?php
//          // 連想配列に値を代入する
//          $personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];
 
//          // 連想配列の値を出力する
//          print_r($personal_data);
 
//          // 改行する
//          echo '<br>';
 
//          // 'age'というキーの値を更新する
//          $personal_data['age'] = 37;
 
//          // 新しく要素（キーと値）を追加する
//          $personal_data['address'] = '東京都';
 
//          // 連想配列の値を出力する
//          print_r($personal_data);
         
//          // 改行する
//          echo '<br>';
 
//          // 'gender'というキーの値を出力する
//          echo $personal_data['gender'];

//          ?>
//      </p>
//  </body>
 
//  </html>