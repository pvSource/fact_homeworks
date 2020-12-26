<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Fact.School. Homework. 25 Dec</title>
</head>
<body>

<main class="main">
    <h1 class="main__title">Домашнее задание от  25 декабря 2020г.</h1>
    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 1 Задание</h2>
            <article class="task__info">
                <p>Дана строка. Если в этой строке более 5-ти символов - вырежете из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.</p>
            </article>
            <div class="task__body">
    <!--            Дана строка. Если в этой строке более 5-ти символов - вырежете из нее первые 5 символов,
     добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.-->
                <form class="task__form form" action="index.php" method="post">
                    <p>Введите строку: <input class = "form__input" type="text" name="str_1" /> <input type="submit" value="Отправить" /></p>
                </form>
                <?
                function first($str) {
                    $result_1 = '';
                    if (mb_strlen($str) > 5) {
                        $result_1 = mb_substr($str, 0, 5) . '...';
                    } else {
                        $result_1 = $str;
                    }
                    echo "$str => $result_1";
                }

                if ($_POST['str_1']) {
                    first($_POST['str_1']);
                }
                ?>
            </div>
        </div>
    </section>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 2 Задание</h2>
            <article class="task__info">
                <p>Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</p>
            </article>
            <div class="task__body">
                <form class="task__form form" action="index.php" method="post">
                    <p>Введите строку: <input class = "form__input" type="text" name="str_2" /><input type="submit" value="Отправить" /></p>
                </form>
                <?
                function second($str) {
                    $result = str_replace(['a', 'b', 'c'], [1, 2, 3], $str);
                    echo "$str => $result";
                }

                if ($_POST['str_2']) {
                    second($_POST['str_2']);
                }
                ?>
            </div>
        </div>
    </section>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 3 Задание</h2>
            <article class="task__info">
                <p>Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'</p>
            </article>
            <div class="task__body">
                <?
                function third($str) {
                    echo strrpos($str, 'b');
                }

                third('abc abc abc');
                ?>
            </div>
            <article class="task__warning">Указывает номер позиции, с учётом того, что первый символ имеет индекс равный нулю!</article>
        </div>
    </section>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 4 Задание</h2>
            <article class="task__info">
                <p>Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</p>
            </article>
            <div class="task__body">
                <?
                function fourth($str) {
                    $result = explode(' ', $str);
                    foreach ($result as $key => $value) {
                        echo "$key. $value<br>";
                    }
                }

                fourth('html css php');
                ?>
            </div>
        </div>
    </section>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 5 Задание</h2>
            <article class="task__info">
                <p>В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.</p>
            </article>
            <div class="task__body">
                <form class="task__form form" action="index.php" method="post">
                    <p>
                        Введите 1 дату: <input class = "form__input" type="text" name="date_1" />
                        Введите 2 дату: <input class = "form__input" type="text" name="date_2" />
                        <input type="submit" value="Отправить" />
                    </p>
                </form>
                <?
                function fifth($date_1, $date_2) {
                    $date_1_real = date_create_from_format('j-n-Y', $date_1);
                    $date_2_real = date_create_from_format('j-n-Y', $date_2);
                    $result = date_diff ($date_1_real, $date_2_real);
                    echo "Между $date_1 и $date_2:<br><ul><li>Лет: $result->y</li><li>Месяцев: $result->m</li><li>Суток: $result->d</li>";
                }

                if ($_POST['date_1'] and $_POST['date_2']) {
                    fifth($_POST['date_1'], $_POST['date_2']);
                }
                ?>
            </div>
            <article class="task__warning">Месяц и день может не содержать допонительные нули, например Февраль может быть указан так: "02", а может и так: "2"</article>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="footer__container">
        <a class="footer__link" href=https://github.com/pvSource/fact_homeworks">GitHub</a>
    </div>
</footer>






</body>
</html>