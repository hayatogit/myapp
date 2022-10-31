<?php
// 正規表現を使って形式が正しいかチェックしてみよう。
/**
 * よく使う表現
 * . 任意の一文字
 * * 0回以上の繰り返し
 * + 1回以上の繰り返し
 * {n} n回の繰り返し
 * [] 文字クラスの作成
 * [abc] aまたはbまたはc
 * [^abc] aまたはbまたはc以外
 * [0-9] 0~9まで
 * [a-z] a~zまで
 * $ 終端一致
 * ^ 先頭一致
 * \w 半角英数字とアンダースコア
 * \d 数値
 * \ エスケープ
 */


/**
 * 郵便番号
 * 
 * 001-0012 -> OK
 * 001-001 -> NG
 * 2.2-3042 -> NG
 * wd3-2132 -> NG
 * 124-56789 -> NG
 */
$yubin = '515-00341';

if (preg_match("/^\d{3}-\d{4}$/", $yubin, $result)) {
  echo 'OK';
  print_r($result);
} else {
  echo 'NG';
}

/**
 * Email
 * . _ - と半角英数字が可能
 * 
 * example000@gmail.com -> OK
 * example-0.00@gmail.com -> OK
 * example-0.00@ex.co.jp -> OK
 * example/0.00@ex.co.jp -> NG
 */
$mail = '515-00341';

if (preg_match("/^[\w.\-]+@$/", $mail, $result)) {
  echo 'OK';
  print_r($result);
} else {
  echo 'NG';
}

/**
 * HTML
 * 見出しタグ(h1~h6)の中身のみ取得してみよう。
 */
