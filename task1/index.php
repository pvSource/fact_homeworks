<?
    session_start(); //Старт сессии

    if (session_destroy()) { //Удаление сессии
        echo "Сессия удалена";
    } else {
        echo "Сессия не удалена";
    }
?>