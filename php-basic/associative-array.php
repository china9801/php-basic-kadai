<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
      // 連想配列に値を代入する
      $parsonal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];

      // 連想配列の値を出力する
      print_r($parsonal_data);

      //改行する
      echo '<br>';

      //'age'というキーの値を更新する
      $parsonal_data['age'] = 37;

      // 新しく要素（キーと値）を追加する
      $parsonal_data['address'] = '東京都';

      // 連想配列の値を出力する
      print_r($parsonal_data);

      //改行する
      echo '<br>';

      // 'gender'というキーの値を出力する
      echo $parsonal_data['gender'];
      ?>
    </p>
</body>

</html>