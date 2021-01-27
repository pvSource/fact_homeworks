<?
function sql_connect() {
    $hostname = "localhost";
    $username = "pavel";
    $password = "123qweasd";
    return mysqli_connect($hostname, $username, $password);
}

function create_db($db_name, $sql_resource) {
    mysqli_query($sql_resource, "CREATE DATABASE $db_name");
}

function create_tables($sql_resource) {
    mysqli_query($sql_resource, "CREATE TABLE people ( `ID_person` INT UNSIGNED NOT NULL AUTO_INCREMENT , `Name` VARCHAR(50) NOT NULL , `Surname` VARCHAR(50) NOT NULL , `Age` INT UNSIGNED NOT NULL , PRIMARY KEY (`ID_person`)) ENGINE = InnoDB;");
    mysqli_query($sql_resource, "CREATE TABLE hobbies ( `ID_hobbies` INT UNSIGNED NOT NULL AUTO_INCREMENT , `Name` VARCHAR(50) NOT NULL , `Description` VARCHAR(200) NOT NULL , PRIMARY KEY (`ID_hobbies`)) ENGINE = InnoDB;");

}

function insert_into_db($sql) {
    mysqli_query($sql,"INSERT people(Name, Surname, Age) VALUES ('Pavel', 'Ananin', 24)");
    mysqli_query($sql,"INSERT people(Name, Surname, Age) VALUES ('Bob', 'Bin', 54)");
    mysqli_query($sql,"INSERT people(Name, Surname, Age) VALUES ('John', 'Vanin', 11)");

    mysqli_query($sql,"INSERT hobbies (Name, Description) VALUES ('Теннис', 'Игра с мячом')");
    mysqli_query($sql,"INSERT hobbies (Name, Description) VALUES ('Бокс', 'Единоборство')");
    mysqli_query($sql,"INSERT hobbies (Name, Description) VALUES ('Шашки', 'Игра на доске')");
}

$sql = sql_connect();
$db_name = "peoplehobbies";

create_db($db_name, $sql);
mysqli_select_db($sql, $db_name);
create_tables($sql);

insert_into_db($sql);

