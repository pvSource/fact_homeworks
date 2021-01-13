<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="./style.css" type="text/css">-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
    <script>
        function sendViaJS(login, password) {
            alert("зашла в функцию");
            alert(`login: ${login}, password: ${password}`);
            //console.log(login, password); отладка
            let pass_md5 = CryptoJS.MD5(password);
            //console.log(pass_md5);
            alert(`md5: ${pass_md5}`);
            let xhr = new XMLHttpRequest();
            //xhr.send();

            let body = `login=${encodeURIComponent(login)}&password=${encodeURIComponent(pass_md5)}`;
            alert(`body: ${body}`);
            xhr.open("POST", '/index.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                alert('Попытка отправки');
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    alert(xhr.responseText);
                }
                ;
            }
            xhr.send(body);
            alert('конец функции');
            }
    </script>
    <title>Fact.School. Homework. 25 Dec</title>
</head>
<body>

<main class="main">
    <h1 class="main__title">Домашнее задание от  25 декабря 2020г.</h1>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 1 Задание</h2>
            <article class="task__info">
                <p>Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на электронный адрес).
                    *Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку C:\OpenServer\userdata\temp\email
                </p>
            </article>
            <div class="task__body">
                <form class="task__form form" action="send.php" method="post">
                    <p>Введите логин: <input class = "form__input" type="text" name="login_1" required /></p>
                    <p>Введите пароль: <input class = "form__input" type="password" name="pass_1" required /></p>
                    <input type="submit" value="Отправить на почту, с сервера">
                </form>
            </div>
        </div>
    </section>

    <section class="task__main task">
        <div class="task__container">
            <h2 class="task__title"> 2 Задание (С использованием JS)</h2>
            <article class="task__info">
                <p>
                    Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.
                </p>
            </article>
            <div class="task__body">
                <form class="task__form form">
                    <p>Введите логин: <input class = "form__input" type="text" id="login_2" required /></p>
                    <p>Введите пароль: <input class = "form__input" type="password" id="pass_2" required /></p>
                    <button onclick="sendViaJS(document.getElementById('login_2').value, document.getElementById('pass_2').value)">Отправить</button>

                    <?
                        print_r($_POST);
                    ?>


                </form>
            </div>
        </div>
    </section>


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
                <form class="task__form form" action="anketa.php" method="post">
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