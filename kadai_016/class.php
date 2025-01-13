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
           public $name;
           public $price;
        //コンストラクタ
        public function __construct($name,$price){
          $this->name = $name;
          $this->price = $price;
        }
         // メソッド: 価格を表示
    public function show_price() {
      echo " {$this->name} は {$this->price} 円.<br>";
  }
 }



       // クラスを定義する
       class Animal {
        // プロパティを定義する
        public $name;
        public $height;
        public $weight;
          // コンストラクタ
    public function __construct($name, $height, $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
  }

  // メソッド: 高さを表示
  public function show_height() {
      echo " {$this->name} は {$this->height} cm.";
  }
    }

// Foodクラスのインスタンスを作成
$food_item = new Food("Apple", 100);

// Animalクラスのインスタンスを作成
$animal_item = new Animal("Elephant", 300, 5000);

// インスタンスを出力
echo "Food instance:<br>";
print_r($food_item);
$food_item->show_price();

echo "Animal instance:<br>";
print_r($animal_item);
$animal_item->show_height();





       ?>
   </p>
</body>

</html>