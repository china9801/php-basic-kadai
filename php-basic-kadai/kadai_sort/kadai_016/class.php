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
          private $name;
          private $price;

          public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
          }

          public function show_price() {
            echo $this->price;
          }
        }


        $potato = new food('potato', 250);

        
        ?>
    </p>
</body>

</html>