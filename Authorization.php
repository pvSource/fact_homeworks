<?
class Authorization {
    public $login;
    public $password_md5; //переписать доступ

    public function __construct($login, $password)
    {
        //echo "Начала конструктора";
        $this->login = $login;
        $this->password_md5 = md5($password);
        //$this->connect(); //Проверяет корректность login/password_md5
    }

    public function connect(): int {
        //echo "Заход в коннект";
        $hostname = "localhost";
        $username = "pavel";
        $password = "123qweasd";
        $dbname = "fact_users";
        $has_db_this_login = false;
        $db_conn = mysqli_connect($hostname, $username, $password, $dbname);
        //echo $this->login;
        $sql = mysqli_query($db_conn, "SELECT `login`, `password_md5` FROM `users`");
        $sql_arr = mysqli_fetch_all($sql, MYSQLI_ASSOC);
        foreach ($sql_arr as $key => $value) {
            if ($value['login'] == $this->login) {
                $has_db_this_login = true;
                if ($value['password_md5'] == $this->password_md5) {
                    return 0; //успешно
                } else {
                    return 1; //не сошелся пароль
                }
            }
        }
        return 2; //нет такого логина
    }
}

