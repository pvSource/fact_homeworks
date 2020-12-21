<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя работа от 21 декабря</title>
</head>
<body>
<section class="task">
    <h2 class="task__title">1 задание</h2>
    <div class="task__body">
        <?
        for ($i = 5; $i <= 13; $i++) {
            echo "$i <br>";
        }
        ?>
    </div>
</section>

<section class="task">
    <h2 class="task__title">2 задание (while)</h2>
    <div class="task__body">
        <?
        $num = 1000;
        $i = 1;

        echo "$i. $num";
        while ($num >= 50) {
            $i++;
            $num /= 2;
            echo "/2 = $num<br>" .($num > 50 ? "$i. $num" : "");
        }
        echo "$num - Ответ!<br>Количество итераций:" . ($i - 1); //Здесь и далее вычитание еденицы, связано с тем, что мы зашли в цикл уже со значением 1 вместо 0

        ?>
    </div>
</section>

<section class="task">
    <h2 class="task__title">2 задание (for)</h2>
    <div class="task__body">
        <?
        $num = 1000;
        $i = 1;

        echo "$i. $num";
        for ($i++; $num >= 50; $i++) { //Здесь использование i++ дважды осознанное действие
            $num /= 2;
            echo "/2 = $num<br>" .($num > 50 ? "$i. $num" : "");
        }
        echo "$num - Ответ!<br>Количество итераций: " . ($i - 2); //потому что цикл в нашем случае начался с 2


        ?>
    </div>
</section>

<section class="task">
    <h2 class="task__title">3 задание</h2>
    <div class="task__body">
        <?
        function print_some_numbers($i)
        {
            $string_final = '';
            for ($j = 0; $j <= (10 - $i); $j++) {
                $string_final = $string_final . $j . (($j < (10 - $i)) ? ', ' : '<br>');
            }
            echo $string_final;
        }


        for ($i = 0; $i <= 10; $i++) {
            print_some_numbers($i);
        }
        ?>
    </div>
</section>

</body>
</html>
