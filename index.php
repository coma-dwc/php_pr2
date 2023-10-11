<!--PC調子悪いため練習問題-->


<?php
/*
■PHP入門 練習問題1
【問題】「なんだきみは！」と表示させてください
*/

/*
echo 'なんだきみは！'
*/


/*
■PHP入門 練習問題2
【問題】変数を使用して「 4 + 5 = 9 」を表示させてください。
*/

/*
$a = 4;
$b = 5;
$c = $a + $b;

echo $a . '+' . $b . '=' . $c;
*/

/*
■PHP入門 練習問題3
【問題】「2020年のオリンピック開催地は"東京"です。」と表示してください。
*/

/*
$a = "2020年のオリンピック開催地は\"東京\"です。";
echo $a;
*/

/*
■PHP入門 練習問題4
【問題】for　と　continue　を使用して1から50までの数字の偶数を縦に表示してください。
*/

/*
for($a = 1; $a <= 50; $a++) {
  if($a %2 !=0) {
    continue;
  }
  echo $a . '<br>';
}
*/

/*
■PHP入門 練習問題5
【問題】
for と continue を使用して1から50までの数字の奇数を縦に表示してください。
*/

/*
for($a = 1; $a <= 50; $a++) {
  if($a %2 == 0) {
    continue;
  }
  echo $a . '<br>';
}
*/

/*
■PHP入門 練習問題6
【問題】
if , else if , else を使用して50点未満なら「不可」、
50点以上65点未満なら「可」、
65点以上80点未満なら「良」、
80点以上なら「優」というコードを作成してください。
そして、70点の場合の結果を表示させてください。
*/

/*
$a = 80;
if($a >= 80) {
  echo "優";
} else if(($a < 80) && ($a >= 65)) {
  echo "良";
} else if(($a < 65) && ($a >= 50)) {
  echo "可";
} else echo "不可";
*/

/*
■PHP入門 練習問題7
【問題】「結果は60点です。合格です。」という文章を表示させて下さい。
[条件]
・switch , case , break を使用する。
・90点以上は"パーフェクトです。"と表示。
・70点以上90点未満は"素晴らしい"と表示。
・50点以上70点未満は"合格です。"と表示。
・それ以下は"頑張りましょう！"と表示。
・60点の場合で表示。
*/

/*
$score = 60;

switch($score) {
  case($score >= 90):
    echo "パーフェクトです。";
    break;
  case($score >= 70):
    echo "素晴らしい";
    break;
  case($score >= 50):
    echo "合格です。";
    break;
  default:
    echo "頑張りましょう！";
}
*/

/*
■PHP入門 練習問題8
【問題】現在の日時を表示させてください。
*/

/*
echo "現在日時：" .date('Y年m月d日 H:i:s');
*/

/*
■PHP入門 練習問題9
【問題】arrayで商品名を格納して以下のように表示してください。
「商品は9つです。」の9のところもPHPで表示してください。
 --------------------------------------
 商品は9つです。

 ・プリン
 ・ショートケーキ
 ・クッキー
 ・ゼリー
 ・カヌレ
 ・アップルパイ
 ・マカロン
 ・シュークリーム
 ・チーズケーキ
 --------------------------------------
 */

/*
 $products = [
   "プリン",
   "ショートケーキ",
   "クッキー",
   "ゼリー",
   "カヌレ",
   "アップルパイ",
   "マカロン",
   "シュークリーム",
   "チーズケーキ"
   ];
?>
商品は<?php echo count($products); ?>つです。
<?php foreach ($products as $product): ?>
・ <?php echo $product; ?>

<?php endforeach; ?>
*/

/*
■PHP入門 練習問題10
【練習】arrayで商品名を格納して以下のように表示してください。
「商品は9つです。」の9のところもPHPで表示してください。
今度はリスト部分をforを使用して表示してください。
 --------------------------------------
 商品は9つです。

 ・プリン
 ・ショートケーキ
 ・クッキー
 ・ゼリー
 ・カヌレ
 ・アップルパイ
 ・マカロン
 ・シュークリーム
 ・チーズケーキ
 --------------------------------------
 */

 /*
 $products = [
   "プリン",
   "ショートケーキ",
   "クッキー",
   "ゼリー",
   "カヌレ",
   "アップルパイ",
   "マカロン",
   "シュークリーム",
   "チーズケーキ"
   ];
?>

商品は<?php echo count($products); ?>つです。
<?php
for($i = 0; $i < count($products); $i++): ?>
 ・<?php echo $products[$i]; ?>

<?php endfor; ?>
*/

/*
■PHP入門 練習問題11
【練習】arrayで商品名を格納して以下のように表示してください。
「商品は9つです。」の9のところもPHPで表示してください。
今度はリスト部分をwhileを使用して表示してください。
 --------------------------------------
 商品は9つです。

 ・プリン
 ・ショートケーキ
 ・クッキー
 ・ゼリー
 ・カヌレ
 ・アップルパイ
 ・マカロン
 ・シュークリーム
 ・チーズケーキ
 --------------------------------------
 */

/*
 $products = [
   "プリン",
   "ショートケーキ",
   "クッキー",
   "ゼリー",
   "カヌレ",
   "アップルパイ",
   "マカロン",
   "シュークリーム",
   "チーズケーキ"
   ];
?>

商品は<?php echo count($products); ?>つです。
<?php
$i = 0;
while($i < count($products)) {
  echo "・" . $products[$i] . "\n";
  $i++;
}
*/

/*
■PHP入門 練習問題11
【練習】arrayで商品名を格納して以下のように表示してください。
「商品は9つです。」の9のところもPHPで表示してください。
今度はリスト部分をforeachを使用して表示してください。
 --------------------------------------
 商品は9つです。

 ・プリン
 ・ショートケーキ
 ・クッキー
 ・ゼリー
 ・カヌレ
 ・アップルパイ
 ・マカロン
 ・シュークリーム
 ・チーズケーキ
 --------------------------------------
 */

/*
 $products = [
   "プリン",
   "ショートケーキ",
   "クッキー",
   "ゼリー",
   "カヌレ",
   "アップルパイ",
   "マカロン",
   "シュークリーム",
   "チーズケーキ"
   ];
?>

商品は<?php echo count($products); ?>つです。
<?php
foreach($products as $i) {
  echo "・" . $i . "\n";
}
?>
*/
?>