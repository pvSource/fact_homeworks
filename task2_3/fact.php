<?
session_start();
$_SESSION[$_COOKIE['last_user']]['last_page'] = '<a href = "./fact.php">Fact</a>';
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
    <title>Document</title>
</head>
<body>
<h1>КАК МЫ ДЕЛАЕМ УСПЕШНЫЕ ПРОЕКТЫ</h1>
<p>Мы привыкли работать на результат и мы знаем как его достигать.
Четко поставленные бизнес-процессы, слаженная команда специалистов и постоянная работа с клиентом обеспечивают высокое качество, соблюдение сроков и полную прозрачность проекта на каждом из его этапов.
</p>
<p>Наша цель — довольный заказчик и успешный проект.</p>
<?include 'nav.php'?>
</body>
</html>
