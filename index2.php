<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>よくわかるPHPの教科書</title>
</head>

    <body>
        <header>
        <h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
        </header>

        <main>
        <h2>Practice</h2>
        <pre>
            <?php
            /* ここに、PHPのプログラムを記述します */
            print("\n");
            print("\n");
            print("\n");
            print('3-1_文字の出力');
            print("\n");
            print("\n");
            //文字の出力
                print('PHPを勉強中です');
                print("\n");
            //文字の出力2
                echo('PHPを勉強中です');
                print("\n");
            //クォーテションの使用方法1
                print("I'm studying");
                print("\n");
            //クォーテションの使用方法2
                print('I\'m studying');
            print("\n");
            print("\n");
            print("\n");
            print('3-2_計算結果の出力');
            print("\n");
            print("\n");
                print(123+2*5/3);
                print("\n");
                print((123+2)*5/3);
                print("\n");
                print("(123+2)*5/3");
                print("\n");
            //練習問題
                print(60*60*24);
            print("\n");
            print("\n");
            print("\n");
            print('3-2_計算結果の出力');
            print("\n");
            print("\n");
            //時刻を表示する
                print('現在は' . date('G時 i分 s秒'). 'です');
            ?>
        </pre>
        </main>
    </body>
</html>