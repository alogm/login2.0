<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "../conec_base/database.php");

function all()
{
    global $mysqli;
    $response = $mysqli->query("SELECT * FROM login_db");
    $data = $response->fetch_all(MYSQLI_ASSOC);

    return $data;
}

function getByID($id)
{
    global $mysqli;
    $respuesta = $mysqli->query("SELECT * FROM login_db WHERE usuario='$id'");
    $data = $respuesta->fetch_assoc();

return $data;
}