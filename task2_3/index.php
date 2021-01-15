<?
    session_start();
    $is_authorised = false;
    if(isset($_POST['login']) && ($_POST['ver'])) {
        if ($_POST['login'] == 'Bob') {
            if (md5($_POST['password']) == '4ddc3a9aaa4de72ea38333044cbecaaa') {
                $is_authorised = true;
                $_SESSION['current_user'] = 'Bob';
                setcookie('last_user', 'Bob', time()+3600);
            }
        } elseif ($_POST['login'] == 'Mary') {
            if (md5($_POST['password']) == '41d4429b45b0d23e09f474560ee0af20') {
                $is_authorised = true;
                $_SESSION['current_user'] = 'Mary';
                setcookie('last_user', 'Mary', time()+3600);
            }
        }
        if ($is_authorised) {
            if (!isset($_SESSION[$_POST['login']]['last_page'])) {
                $_SESSION[$_POST['login']]['last_page'] = '<a href="index.php">Страница верификации</a>';
            }
        }
    }
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <? if (isset($_SESSION['current_user'])) {
        include 'style.php';
    }
    ?>
    <title>Задание 2</title>
</head>
<body>
    <h1>Авторизация</h1>
    <p>Текущий пользователь:
    <?
    echo $_SESSION['current_user'] ? $_SESSION['current_user'] : 'не задан';
    ?>
    </p>
    <form action="index.php" method="post">
        <p>
            Логин:
            <select name="login" required>
                <option value="Bob">Bob</option> //bobik
                <option value="Mary">Mary</option> //bipa
            </select>
        </p>
        <p>Пароль: <input type="password" name="password" required></p>
        <p><input type="submit" name="ver" value="Войти"></p>
    </form>
    <?
        if (isset($_SESSION['current_user'])) {
            echo $_SESSION['current_user'] . ", последняя страница, на которой вы были:<br>" . $_SESSION[$_SESSION['current_user']]['last_page'];
        }
    ?>
    <br>
    <?include 'nav.php'?>
</body>
</html>