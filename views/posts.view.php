<!DOCTYPE html>
<html lang="en">
<?php require "partials/head.view.php" ?>
<body>
	<?php require "partials/nav.view.php" ?>
	<main class="w-[1080px] max-w-[90vw] m-auto">
		<a href="/posts/create" class="font-bold py-2 px-4 text-sm bg-black text-white inline-block rounded-lg my-4">Create New Post</a>
		<ul>
			<?php foreach($posts as $post) : ?> 
				<li class='font-bold text-red-800'>
					<a href="/post?id=<?= $post["id"] ?>">
						<?= htmlspecialchars($post["body"]) ?>
					</a>
				</li>
			<?php endforeach ?> 
		</ul>
	<main>

</body>
</html>
