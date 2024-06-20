<?php

$title = "Posts";

$posts = $db->query("SELECT * FROM notes where user_id = :id", ["id" => 3])->fetchAll();

require "views/posts.view.php"

?>
