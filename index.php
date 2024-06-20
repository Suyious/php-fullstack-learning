<?php

require "db.php";

$config = require "config.php";
$db = new Database($config['database']);

require "router.php";

?>
