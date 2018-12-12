<?php
require_once(__DIR__ . "/../dao/appdao.php");

const INDEX = "../";

changeMDP($_POST["id"], $_POST["pass"]);

header('Location: '. INDEX);

?>