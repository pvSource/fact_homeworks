<?
session_start();
$_SESSION[$_COOKIE['last_user']]['last_page'] = '<a href = "./bitrix.php">Bitrix</a>';
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
<h1>«1С-Битрикс»</h1>
<p>— российская технологическая компания, разработчик CMS «1С-Битрикс: Управление сайтом» и сервиса «Битрикс24».</p>

<p>Компания «Битрикс» основана в 1998 году Сергеем Рыжиковым совместно с группой единомышленников. Большинство из них работает в компании до сих пор.

    Штаб-квартира компании расположена в Калининграде. Также есть офисы в Москве, Санкт-Петербурге, Минске и Алма-Ате.</p>
<?include 'nav.php'?>
</body>
</html>
