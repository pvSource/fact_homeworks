<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title>ФАКТ Школа. 23 декабря(ДЗ)</title>
</head>
<body>
<section class="task">
    <h2 class="task__title">Задание 1</h2>
    <div class="task__body">
        <form class="task__form form" action="index.php" method="post">
            <p>Введите число n: <input class = "form__input" type="tel" name="n_value" /></p>
        </form>
        <?
        function first($n)
        {
            $n = (integer)$n;
            if(($n <= 0) and ($_POST['n_value'])) {
                echo "Попробуйте другое значение";
                return;
            }
            $arr = [];
            for ($i = 0; $i < $n; $i++) {
                $arr[$i] = mt_rand();
                if (($i % 2) == 1) { //так как массив начинается с нуля!
                    echo "<b>$arr[$i]<br></b>";
                } else {
                    echo "$arr[$i]<br>";
                }
            }
        }
        first($_POST['n_value']);
        ?>
    </div>
</section>

<section class="task">
    <h2 class="task__title">Задание 2</h2>
    <div class="task__body">
        <?
        $arr_2 = [
                "Orange",
                "Whiskey",
                "Coca-Cola",
                "Apple",
                "Snickers",
                "Amaretto",
                "Tomato",
                "Aroma"
        ];
        foreach ($arr_2 as $key => $value) {
            if ($value[0] == 'A') {
                echo "$value, ";
            }
        }
        ?>
    </div>
</section>

<section class="task">
    <h2 class="task__title">Задание 2</h2>
    <div class="task__body">
        <?
        $arr_numb = [];
        $rand_first = mt_rand(1, 10);

        for($i = 0; $i < $rand_first; $i++) { //Наполняем массив $arr_numb
            for($j = 0; $j < mt_rand(1, 10); $j++) { //Массивами, длина, которых rand число от 1 до 10
                $arr_numb[$i][$j] = mt_rand(0, 100); //И заполняем их случайными числами от 1 до 100
            }
        }

        //На данный момент у нас есть двумерный массив с числами

        $count_arr_numb = count($arr_numb);
        $counter = 0;
        echo "Массив arr_numb состоит из $count_arr_numb элементов, каждый из которых состоит из:<ul>";
        for($i = 0; $i < $count_arr_numb; $i++) {
            $current_arr_count = count($arr_numb[$i]);
            echo "<li>$i из $current_arr_count элементов</li>";
            $counter += $current_arr_count;
        }
        echo "</ul> Общее количество всех элементов: $counter";


        ?>
    </div>
</section>



</body>
</html>