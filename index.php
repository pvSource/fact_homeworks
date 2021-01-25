<?
include_once "./Authorization.php";
if (isset($_POST['login'])) {
    $current_connect = new Authorization($_POST['login'], $_POST['password']);
    if ($current_connect->connect() == 0) {
        header("Location: https://a.d-cd.net/8fcfdes-960.jpg");
    } else {
        if ($current_connect->connect() == 1) {
            echo "<script>alert('Неверный пароль!')</script>";
        } else {
            echo "<script>alert('Нет логина в базе!')</script>";
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
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <title>Суперстильная страница авторизации</title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <img src="assets/img/logo.jpg" class="header__logo_pic">
            </div>
            <div class="header__title">Авторизация</div>
        </div>
    </header>
    <main class="main">
        <p>Укажите свои данные для входа:</p>
        <form class="main__form" action="index.php" method="post">

            <p>Логин: <input type="text" name="login" class="main__input" required></p>
            <p>Пароль: <input type="password" name="password" class="main__input" required></p>
            <input type="submit" class="main__input main__input_submit">
        </form>
    </main>

</body>
</html>
