<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food {
          // プロパティを定義する
          private $name;
          private $price;

          // コンストラクタを定義する
          public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
          }

          public function show_price() {
            echo $this->price . '<br>';
          }
        }

        
        class Animal {
          // プロパティを定義する
          private $name;
          private $height;
          private $weight;

          // コンストラクタを定義する
          public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }

          // height プロパティの値を出力するメソッド
          public function show_height() {
            echo $this->height . '<br>';
          }
        }

        $potato = new food('potato', 250);
        $dog = new animal('dog', 60, 5000);

        print_r($potato);
        echo '<br>';
        print_r($dog);
        echo '<br>';

        $potato->show_price().'<br>';
        $dog->show_height();

        ?>
    </p>
</body>

</html>