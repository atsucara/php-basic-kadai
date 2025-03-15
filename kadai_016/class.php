<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food {
           // プロパティを定義する
           private $name;
           private $price;

           public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
           }

           public function show_price(){
                echo $this->price . '<br>';
           }
        }

       class Animal {
        // プロパティを定義する
        private $name;
        private $weight;
        private $height;

        public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        public function show_height(){
            echo $this->height . '<br>';
            }
        }

       // インスタンス化する
       $Food = new Food('potato', 250);
       $Animal = new Animal('dog', 60, 5000);

       // プロパティにアクセスし、値を代入する

       // プロパティにアクセスし、値を出力する
       print_r($Food);
       echo '<br>';
       print_r($Animal);
       echo '<br>';
       $Food->show_price();
       $Animal->show_height();
       ?>
   </p>
</body>

</html>