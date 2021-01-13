<?
$sum = 0;
foreach ($_POST as $key => $value) {
    if ((($key == "3") or ($key == "9") or ($key == "10") or ($key == "13") or ($key == "14") or ($key == "19")) and ($_POST[$key] == "yes")) {
        $sum = $sum + 1;
    } elseif (($key != "name_3")  and ($_POST[$key] == "no")) {
        $sum = $sum + 1;
    }
}

echo $_POST['name_3'] . "<br>";
if ($sum > 15) {
    echo "У Вас покладистый характер";
} elseif ($sum >= 8) {
    echo "Вы не лишены недостатков, но с вами можно ладить";
} else {
    echo "Вашим друзьям можно посочувствовать";
}
?>
