<!DOCTYPE html>
<html la="ja">
    <head>
        <meta charset="UTF-8">
        <title>課題 クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
    </head>

    <body>
        <P>
            <?php
                 // クラスFoodの定義
                class Food{
                    private $name;
                    private $price;
                    
                    // コンストラクタ
                    public function __construct(string $name,int $price){
                        $this->name = $name;
                        $this->price = $price;
                    }
                    
                    // メソッド
                    public function show_price(){
                        echo $this->price."<br>";

                    }
                    }

                    // インスタンス化する
                    $potato = new Food("potato", 250);

                    // $potatoの各プロパティの値を表示
                    print_r($potato);
                    // 改行
                    echo "<br>";
                
                // クラスAnimalの定義
                class Animal{
                    private $name;
                    private $height;
                    private $weight;
                    
                    // コンストラクタ
                    public function __construct(string $name,int $height, int $weight){
                        $this->name = $name;
                        $this->height = $height;
                        $this->weight = $weight;
                    }
                    
                    // メソッド
                    public function show_height(){
                        echo $this->height."<br>";
                    }
                    }

                    // インスタンス化する
                    $dog = new Animal("dog", 60, 5000);

                    // $dogの各プロパティの値を表示
                    print_r($dog);
                    // 改行
                    echo "<br>";

                // $potatoのshow_priceメソッドを呼び出す
                $potato->show_price();
                // $dogのshow_heightメソッドを呼び出す
                $dog->show_height();
            ?>
        </p>
    </body>

</html>