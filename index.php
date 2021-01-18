<?
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sum = 0;
        foreach ($_POST as $key => $value) {
            if ((($key == "3") or ($key == "9") or ($key == "10") or ($key == "13") or ($key == "14") or ($key == "19")) and ($_POST[$key] == "yes")) {
                $sum = $sum + 1;
            } elseif (($key != "name_3")  and ($_POST[$key] == "no")) {
                $sum = $sum + 1;
            }
        }
        $name = $_POST['name_3'];
        header("Location: anketa.php/?sum=$sum&name=$name");
    }
?>
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
    <title>Fact.School. Homework. 15 Jan</title>
</head>
<body>

<main class="main">
    <h1 class="main__title">Домашнее задание от 11 января 2020г.</h1>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 3 задание</h2>
            <article class="task__info">
                <p>
                    Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). По умолчанию задайте везде значение «да».
                    Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Посчитайте сумму набранных баллов:
                    если она оказалась более 15, то результат: «У Вас покладистый характер»;
                    *если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;
                    *если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
                    Отобразите на экране имя анкетируемого, фразу-результат анкетирования

                </p>
            </article>
            <div class="task__body">
                <form class="task__form form" action="index.php" method="post">
                    <hr>
                    <p>Считаете ли Вы, что у многих ваших знакомых хороший характер?</p>
                    <p><input type="radio" name="1" value="yes" checked>Да</p>
                    <p><input type="radio" name="1" value="no">Нет</p>
                    <hr>
                    <p>Раздражают ли Вас мелкие повседневные обязанности?</p>
                    <p><input type="radio" name="2" value="yes" checked>Да</p>
                    <p><input type="radio" name="2" value="no">Нет</p>
                    <hr>
                    <p>Верите ли Вы, что ваши друзья преданы Вам? </p>
                    <p><input type="radio" name="3" value="yes" checked>Да</p>
                    <p><input type="radio" name="3" value="no">Нет</p>
                    <hr>
                    <p>Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</p>
                    <p><input type="radio" name="4" value="yes" checked>Да</p>
                    <p><input type="radio" name="4" value="no">Нет</p>
                    <hr>
                    <p>Способны ли Вы ударить собаку или кошку?</p>
                    <p><input type="radio" name="5" value="yes" checked>Да</p>
                    <p><input type="radio" name="5" value="no">Нет</p>
                    <hr>
                    <p>Часто ли Вы принимаете лекарства?</p>
                    <p><input type="radio" name="6" value="yes" checked>Да</p>
                    <p><input type="radio" name="6" value="no">Нет</p>
                    <hr>
                    <p>Часто ли Вы меняете магазин, в который ходите за продуктами?</p>
                    <p><input type="radio" name="7" value="yes" checked>Да</p>
                    <p><input type="radio" name="7" value="no">Нет</p>
                    <hr>
                    <p>Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</p>
                    <p><input type="radio" name="8" value="yes" checked>Да</p>
                    <p><input type="radio" name="8" value="no">Нет</p>
                    <hr>
                    <p>Тяготят ли Вас общественные обязанности?</p>
                    <p><input type="radio" name="9" value="yes" checked>Да</p>
                    <p><input type="radio" name="9" value="no">Нет</p>
                    <hr>
                    <p>Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</p>
                    <p><input type="radio" name="10" value="yes" checked>Да</p>
                    <p><input type="radio" name="10" value="no">Нет</p>
                    <hr>
                    <p>Часто ли Вам приходят в голову мысли о Вашей невезучести?</p>
                    <p><input type="radio" name="11" value="yes" checked>Да</p>
                    <p><input type="radio" name="11" value="no">Нет</p>
                    <hr>
                    <p>Сохранилась ли у Вас фигура по сравнению с прошлым?</p>
                    <p><input type="radio" name="12" value="yes" checked>Да</p>
                    <p><input type="radio" name="12" value="no">Нет</p>
                    <hr>
                    <p>Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</p>
                    <p><input type="radio" name="13" value="yes" checked>Да</p>
                    <p><input type="radio" name="13" value="no">Нет</p>
                    <hr>
                    <p>Нравится ли Вам семейная жизнь?</p>
                    <p><input type="radio" name="14" value="yes" checked>Да</p>
                    <p><input type="radio" name="14" value="no">Нет</p>
                    <hr>
                    <p>Злопамятны ли Вы?</p>
                    <p><input type="radio" name="15" value="yes" checked>Да</p>
                    <p><input type="radio" name="15" value="no">Нет</p>
                    <hr>
                    <p>Находите ли Вы, что стоит погода, типичная для данного времени года?</p>
                    <p><input type="radio" name="16" value="yes" checked>Да</p>
                    <p><input type="radio" name="16" value="no">Нет</p>
                    <hr>
                    <p>Случается ли Вам с утра быть в плохом настроении?</p>
                    <p><input type="radio" name="17" value="yes" checked>Да</p>
                    <p><input type="radio" name="17" value="no">Нет</p>
                    <hr>
                    <p>Раздражает ли Вас современная живопись?</p>
                    <p><input type="radio" name="18" value="yes" checked>Да</p>
                    <p><input type="radio" name="18" value="no">Нет</p>
                    <hr>
                    <p>Надоедает ли Вам присутствие чужих детей в доме более одного часа?</p>
                    <p><input type="radio" name="19" value="yes" checked>Да</p>
                    <p><input type="radio" name="19" value="no">Нет</p>
                    <hr>

                    <p>Введите имя: <input class = "form__input" type="text" name="name_3" required /></p>
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </section>





</main>
</body>
</html>