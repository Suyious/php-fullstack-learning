<?php

$title = "Create Post";

if($_SERVER["REQUEST_METHOD"] === "POST") {

	$errors = [];

	if(strlen($_POST["body"]) === 0) {
		$errors["body"] = "body is required.";
	}

	if(strlen($_POST["body"]) > 1000) {
		$errors["body"] = "body cannot be more than 1000 characters.";
	}

	if(empty($errors)) {
		$db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
			"body" => $_POST["body"],
			"user_id" => 3,
		]);
	}
}

require "views/post-create.view.php"

?>
