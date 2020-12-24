<?
$n = $_POST['n_value'];
$arr = [];
for ($i = 0; $i < $n; $i++) {
    $arr[$i] = mt_rand();
    echo "$arr[$i]<br>";
}
?>