
<!-- PHPの代表的なデータ型は以下の4つ
1.文字列型=「果物」などの単語や「私は果物を食べたいです」などの文章のこと
  PHPでは、以下のようにシングルクォーテーションまたはダブルクォーテーションで
  文字列を囲むことで、文字列型のデータとしてコンピュータに扱われます。 -->
<?php
echo 'こんにちは';
echo "今日はいい天気ですね";
?>

<!--
2. 整数型=整数型は「100」「9999」など、整数を表すデータ型のこと
    PHPでは、以下のように整数をそのまま記述することで整数型になります。
    なお、整数は半角で入力しないとエラーが発生するので注意してください。-->

<?php
echo 100;
?>


<!--
3. 浮動小数点型=「0.1」「1.618」など、小数を表すデータ型
   整数と同じように、小数をそのまま半角で記述することで浮動小数点型になります。
   JavaScriptでは整数と小数が区別されず、「数値型」という1つのデータ型にまとめられていました。
   しかしPHPでは整数と小数が区別され、別のデータ型（整数型と浮動小数点型）として扱われます。-->
<?php
echo 0.1;
?>

<!--浮動小数点型を使わない場合(詳細は教材)
補足：浮動小数点型は誤差が生じる場合がある
消費税の計算など正確な結果が求められる場面では基本的に浮動小数点型は使われません。-->

<!--
4. 論理型=TRUE（真）またはFALSE（偽）、つまり「本当」か「嘘」かという論理値（真偽値）を表すデータ型
    PHPでは、以下のようにTRUEまたはFALSEをそのまま記述することで、論理型のデータとしてコンピュータに扱われます。-->

<?php
echo TRUE;
echo FALSE;
?>

<!--大文字で書く慣習
TRUEとFALSEは大文字と小文字のどちらでも動作しますが、PHPでは慣習的に大文字がよく使われます。
よって、本教材でも大文字で統一します。-->