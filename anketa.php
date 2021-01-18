<?
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name = $_REQUEST['name'];
    $sum = $_REQUEST['sum'];
    echo $name . "<br>";
    if ($sum > 15) {
        echo "У Вас покладистый характер";
    } elseif ($sum >= 8) {
        echo "Вы не лишены недостатков, но с вами можно ладить";
    } else {
        echo "Вашим друзьям можно посочувствовать";
    }
}
?>
