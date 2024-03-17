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
                if($order === TRUE){
                    sort($array);
                }else{
                    rsort($array);
                }
                return $array;
                }

                // 配列を定義
                $nums = [15, 4, 18, 23, 10];

                // 昇順ソート
                // $sortedにsort_2way関数を代入（引数は$numsとTRUE）
                $sorted= sort_2way($nums, TRUE);
                echo "昇順にソートします<br>";
                foreach ($sorted as $num) {
                echo $num . "<br>";
                }

                // 降順ソート
                // $rsortedにsort_2way関数を代入（引数は$numsとFALSE）
                $rsorted = sort_2way($nums, FALSE);
                echo "降順にソートします<br>";
                foreach ($rsorted as $num) {
                echo $num . "<br>";
                }

            ?>
        </p>
    </body>
</html>