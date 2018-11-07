<?php

require_once(__DIR__ . "/../dao/titres-sections-dao.php");

const INDEX = "../";

modificationTitres($_POST["section"],$_POST["titre"],$_POST["sous-titre"]);
header('Location: '. INDEX);
?>