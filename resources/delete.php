<?php
extract($_POST);

require_once($_SERVER["DOCUMENT_ROOT"] . "../conec_base/database.php");
$mysqli->query("DELETE FROM login_db WHERE Usuario ='$id'");

header("Location: ../views/login.php " );