<?
$bgcolor = isset($_SESSION[$_SESSION['current_user']]['bg-color']) ? $_SESSION[$_SESSION['current_user']]['bg-color'] : 'white';
echo "
<style>
    body {
    background-color: $bgcolor;
    } 
</style>
"
?>

