<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "login_db");
}
 catch (mysqli_sql_exception $e) {
    echo "el error fue: " . $e->getMessage();
}