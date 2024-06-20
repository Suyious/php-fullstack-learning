<!DOCTYPE html>
<html lang="en">
<?php require "partials/head.view.php" ?>
<body>
	<?php require "partials/nav.view.php" ?>
	<main class="w-[1080px] max-w-[90vw] m-auto">
		<form method="POST" class="flex flex-col gap-2">
			<label class="flex flex-col gap-1">
				<div class="flex justify-between">
					<span class="text-sm font-[500]">Post Content</span>
					<span class="text-sm font-[500] text-red-800"><?= $errors["body"] ?? "" ?></span>
				</div>
				<textarea name="body" id="body" class="border-black border-2 rounded-lg h-36 outline-none p-2 text-sm" placeholder="Write your post...">
					<?= $_POST["body"] ?? "" ?>
				</textarea>
			</label>
			<button type="submit" class="bg-black text-white py-2 px-4 rounded lg">Create Post</button>
		</form>
	<main>

</body>
</html>

