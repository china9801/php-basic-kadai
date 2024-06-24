<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
      // 算術演算子を使った場合の戻り値を出力する
      echo 45 + 18;

      //改行する
      echo '<br>';

      // 比較演算子を使った場合の戻り値を出力する
      var_dump(45 > 18);
      ?>
    </p>
    <p>
      <?php
      // 等価演算子を使った場合の戻り値を出力する
      var_dump('5' == 5);

      //改行する
      echo '<br>';

      // 等価演算子を使った場合の戻り値を出力する
      var_dump('5' === 5);
      ?>
    </p>
    <p>
      <?php
      // 変数$numに0～4までのランダムな整数を代入する
      $num = mt_rand(0, 4);

      // 変数$numの値を出力する（確認用）
      echo $num;

      //改行する
      echo '<br>';

      // 変数$numの値が4であれば、「大当たりです」という文字列を出力する
      // 変数$numの値が3であれば、「当たりです」という文字列を出力する
      // それ以外のときは、「はずれです」という文字列を出力する
      if ($num === 4) {
        echo '大当たりです';
      } elseif ($num === 3) {
        echo '当たりです';
      } else {
        echo 'はずれです';
      }
      ?>
    </p>

    <p>
      <?php
      $num = 20;

      // &&（かつ）を記述して、すべての条件が成り立つ場合にのみ処理を行う（変数$numの値が11～29）
      if ($num > 10 && $num < 30) {
        echo '変数$numは10より大きく、30より小さいです';
      } else {
        echo '条件が成り立ちませんでした';
      }

      //改行する
      echo '<br>';

      $num = 30;

      // ||（または）を記述して、1つでも条件が成り立てば処理を行う（変数$numの値が10または30）
      if ($num === 10 || $num === 30) {
        echo '変数$numは10または30です';
      } else {
        echo '条件が成り立ちませんでした';
      }
      ?>
    </p>
</body>

</html>