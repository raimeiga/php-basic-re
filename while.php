問1:while文について、使用するケース、その例を挙げた上で、構文を書け



正解：
使用するケース：繰り返す回数があらかじめわからない場合
例）サイコロで6の目が出るまで繰り返す
構文：
------------------------------------------------------------
while (条件式) {
    条件を満たしている間、繰り返す処理
}
------------------------------------------------------------


問2:
while文を用い、変数$numに0～4までのランダムな整数を代入し、
変数$numの値が0以外である間、変数$numの値を出力し続けるコードを書け。

<<<<<<< HEAD











=======
>>>>>>> f79d6e9372c05c672b9f720178e4dbc69380def2
正解：
------------------------------------------------------------
<?php
// 変数$numに0～4までのランダムな整数を代入する
$num = mt_rand(0, 4);

// 変数$numの値が0以外である間、変数$numの値を出力し続ける
while ($num !== 0) {
    $num = mt_rand(0, 4);
    echo $num.'<br>';
}
?>
------------------------------------------------------------



問:（break文）
while文を用い、変数$numに0～4までのランダムな整数を代入し、
変数$numの値が0以外である間、変数$numの値を出力し続けるコードを書け。
さらに「最大で5回まで」という制限を加えろ。

正解：
------------------------------------------------------------
<p>
         <?php
         // 変数$numに0～4までのランダムな整数を代入する
         $num = mt_rand(0, 4);

         // カウンタ変数を用意する
         $i = 1;
 
         // 変数$numの最初の値を出力する（確認用）
         echo "最初の値は{$num}です。<br>";
 
         // 変数$numの値が0以外である間、変数$numの値を出力し続ける
         while ($num !== 0) {
             // 変数$numに0～4までのランダムな整数を代入する
             $num = mt_rand(0, 4);
 
             // 次の条件式で比較される、変数$numの現在の値を出力する
             echo "現在の値は{$num}です。<br>";

 　　　　　　　// カウンタ変数$iの値が5であれば、break文で繰り返し処理を強制終了する
             if ($i === 5) {
                 echo '5回目なので繰り返し処理を強制終了します。';
                 break;
             }
 
             // カウンタ変数の値を1増やす
             $i++;
         }
         ?>
     </p>
------------------------------------------------------------



<<<<<<< HEAD
問:(continue文）
=======
問:（continue文）

変数$numに1～10までのランダムな整数を代入する
変数$numの値を変数$sumに加算する（sum = 合計）
変数$numの値が偶数のときは、上記の処理をスキップする（結果的に奇数のみが加算される）
変数$sumの値が20以上になったら繰り返し処理を終了する

<p>
         <?php
         // 合計用の変数を用意する
         $sum = 0;
 
         // 変数$sumの値が20以上になるまで繰り返し処理を行う
         while ($sum < 20) {
             // 変数$numに1～10までのランダムな整数を代入する
             $num = mt_rand(1, 10);
            
             echo "{$num}が出ました。<br>";
 
             // 変数$numの値が偶数（2で割った余りが0）であれば、加算せずにcontinue文で次のループに進む
             if ($num % 2 === 0) {
                 echo '偶数なので加算しません。<br>';
                 continue;
             }
 
             // 変数$sumに変数$numの値を加算する
             $sum += $num;
 
             echo "現在の合計は{$sum}です。<br>";
         }
         ?>
     </p>
>>>>>>> f79d6e9372c05c672b9f720178e4dbc69380def2
