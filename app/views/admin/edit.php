<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2>Edit Page</h2>

<form action= "<?php echo BASE_URL; ?>/admin/edit.php" method="POST" autocomplete ="off">

	<label for="title">
	Title
	<input type="text" name="title" value="<?php echo(esc($page['title'])); ?>">

	<label for="label">
	Label
	<input type="text" name="label" value="<?php echo(esc($page['label'])); ?>">

	<label for="slug">
	Slug
	<input type="text" name="slug" value="<?php echo(esc($page['slug']));  ?>">

	<label for="body">
	Body
	<textarea name="body" id="" cols="30" rows="10"><?php echo(esc($page['body'])); ?></textarea>

	<input type="hidden" name="id" value="<?php echo(esc($page['id'])); ?>">

	<input type="submit" value="Edit">

</form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
