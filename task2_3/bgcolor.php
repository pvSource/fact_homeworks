<?
session_start();
$_SESSION[$_COOKIE['last_user']]['last_page'] = '<a href = "./bgcolor.php">Выбор цвета</a>';

if (isset($_SESSION['current_user'])) {
        if (isset($_POST['bgcolor'])) {
        $_SESSION[$_SESSION['current_user']]['bg-color'] = $_POST['bgcolor'];
    }
}

?>
<!doctype html>
<html lang="en">
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
<section>
    <form action="bgcolor.php" method="post">
        <select name="bgcolor">
            <option value="yellow">Желтый</option>
            <option value="green">Зелёный</option>
        </select>
        <input type="submit" name="choose_color" value="on">
    </form>
</section>
<?include 'nav.php'?>
</body>
</html>
