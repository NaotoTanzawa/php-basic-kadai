<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>
    <body>
        <p>
            <?php
                function sort_2way($array,$order){

                // ソート方向を判定
                if($order){
                    echo "昇順にソートします<br>";
                    sort($array);
                    foreach ($array as $num) {
                    echo "{$num}<br>";
                    }
                }else{
                    echo "降順にソートします<br>";
                    rsort($array);
                    foreach ($array as $num) {
                    echo "{$num}<br>";
                    }
                }
                }

                // 配列を定義
                $nums = [15, 4, 18, 23, 10];

                // 昇順ソート
                // $sortedにsort_2way関数を代入（引数は$numsとTRUE）
                sort_2way($nums, TRUE);
                
                // 降順ソート
                // $rsortedにsort_2way関数を代入（引数は$numsとFALSE）
                sort_2way($nums, FALSE);
            ?>
        </p>
    </body>
</html>