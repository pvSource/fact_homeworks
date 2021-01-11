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
            <h2 class="task__title"> 1 Задание (из презентации урока 11-12)</h2>
            <article class="task__info">
                <p>Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей.
                    Выведите на экран значения, которые ввел/выбрал пользователь.</p>
            </article>
            <div class="task__body">
                <!--            Дана строка. Если в этой строке более 5-ти символов - вырежете из нее первые 5 символов,
                 добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.-->
                <form class="task__form form" action="index.php" method="post">
                    <section class="task__group">
                        <p>Введите строку: <input class = "form__input" type="text" name="str_1" /></p>
                    </section>
                    <section class="task__group">
                        <p>Введите много строк: <textarea name="textarea_1"> </textarea></p>
                    </section>
                    <section class="task__group">
                        <p>Выберите один вариант:</p>
                        <p><input type="radio" name="radio_1" value="radio_1-1">Раз</p>
                        <p><input type="radio" name="radio_1" value="radio_1-2">Два</p>
                        <p><input type="radio" name="radio_1" value="radio_1-3">Три</p>
                    </section>
                    <section class="task__group">
                        <p>Выберите несколько вариантов:</p>
                        <p style="color: gold"><input type="checkbox" name="checkbox_1_gold">Золотой</p>
                        <p style="color: green"><input type="checkbox" name="checkbox_1_green">Зелёный</p>
                        <p style="color: deepskyblue"><input type="checkbox" name="checkbox_1_sky">Небесный</p>
                    </section>
                    <section class="task__group">
                        <input type="submit" value="Отправить" action="index.php" method="post">
                    </section>


                </form>
                <?
                function first() {
                    echo "Отправленные значения:<br>";
                    print_r($_POST);
                    echo "<br>...то есть:";
                    echo "<br>Строка: " . (($_POST['str_1']) ? $_POST['str_1'] : 'нет');
                    echo "<br>Строки: " . ((isset($_POST['textarea_1']) and ($_POST['textarea_1']) != "") ? $_POST['textarea_1'] : 'пусто');
                    echo "<br>Цифра: " . (isset($_POST['radio_1']) ? $_POST['radio_1'][8] : 'нет');
                    echo "<br>Золотой цвет: " . (isset($_POST['checkbox_1_gold']) ? 'выбран' : 'нет');
                    echo "<br>Зелёный цвет: " . (isset($_POST['checkbox_1_green']) ? 'выбран' : 'нет');
                    echo "<br>Небесный цвет: " . (isset($_POST['checkbox_1_sky']) ? 'выбран' : 'нет');
                }

                first();

                ?>
            </div>
            <article class="task__warning">Для textarea, независимо от того, используется isset() или нет, будучи переданная, но пустой, получается, что значение true(даже с применением дополнительного сравнения с ""), для просто строки, при использовании isset() происходит аналогичная ситуация, поэтому не использую для неё это.</article>
        </div>
    </section>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 1 Задание</h2>
            <article class="task__info">
                <p>Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.</p>
            </article>
            <div class="task__body">
                <?
                function arr_into_rand($arr) {
                    foreach ($arr as $key => $value) {
                        $arr[$key] = rand();
//                        'Здесь почему-то возникают проблемы при записи в $value'
                    }
                    return $arr;
                }

                $a = [12, 34, 7];
                $b = ["qwe", 4];
                ?>

                <p>Результат:</p>
                <p><?print_r($a)?> => <?print_r(arr_into_rand($a))?></p>
                <p><?print_r($b)?> => <?print_r(arr_into_rand($b))?></p>
            </div>
        </div>
    </section>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 2 Задание</h2>
            <article class="task__info">
                <p>Создайте форму генерации ссылки с параметром:
                    Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая посчитает количество слов строке.
                </p>
            </article>
            <div class="task__body">
                <?
                function word_counter($str) {
                    return str_word_count($str);
                }

                echo word_counter($_GET['second']);
                ?>
                <form action="index.php" method="get">
                    <input type="text" value="HTML, CSS, PHP, BITRIX" name="second"><br>
                    <input type="submit" value="Узнать количество слов в указанной строке">
                </form>
            </div>
        </div>
    </section>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 3 Задание</h2>
            <article class="task__info">
                <p>
                    Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).
                </p>
            </article>
            <div class="task__body">
                <?
                function string_rewriter($str) {
                    $new_string = "";
                    for($i = mb_strlen($str)-1; $i >= 0; $i--) {
                        $new_string = $new_string . $str[$i];
                    }
                    echo $new_string;
                }

                string_rewriter("HTML, CSS, PHP, BITRIX");
                ?>

            </div>
        </div>
    </section>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 4 Задание</h2>
            <article class="task__info">
                <p>
                    Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет на экран длину строки.
                </p>
            </article>
            <div class="task__body">
                <?
                function echo_mb_strlen($str) {
                    echo mb_strlen($str);
                }

                echo_mb_strlen("HTML, CSS, PHP, BITRIX");
                ?>

            </div>
        </div>
    </section>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 5 Задание</h2>
            <article class="task__info">
                <p>
                    Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет каждую букву на новую строку
                </p>
            </article>
            <div class="task__body">
                <?
                function columnPrint($str) {
                    for ($i = 0; $i < mb_strlen($str); $i++) {
                        echo $str[$i] . "<br>";
                    }
                }

                columnPrint("HTML, CSS, PHP, BITRIX");
                ?>

            </div>
        </div>
    </section>

</main>
<!--<footer class="footer">-->
<!--    <div class="footer__container">-->
<!--        <a class="footer__link" href="https://github.com/pvSource/fact_homeworks">GitHub</a>-->
<!--    </div>-->
<!--</footer>-->






</body>
</html>
