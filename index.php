<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?
    echo '<h1>Домашняя работа от 18.12</h1><h2>Задание 1 - 2</h2>';
    $name = 'Pavel';
    $age = 24;
    echo '<p>Имя: ', $name, '</p><p>Возраст: ',$age, '</p>';

    echo '<h2>Задание 3</h2>';
    define(pi_value, pi());
    echo '<p>Значение Пи: ', pi_value, '</p>';

    echo '<h2>Задание 4</h2>';
    $hours = localtime(time(), true)["tm_hour"];
    if ($hours >= 8 and $hours < 20) {
        echo '<img src="https://www.calend.ru/img/content/i1/1914.jpg">';
    } else {
        echo '<img src="https://bipbap.ru/wp-content/uploads/2017/05/66f31ab287_original.jpg">';
    }

?>

</body>
</html>
