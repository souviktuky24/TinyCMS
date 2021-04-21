<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2>Add a new page</h2>

<form action= "<?php echo BASE_URL; ?>/admin/add.php" method="POST" autocomplete ="off">
	<label for="title">
	Title
	<input type="text" name="title">

	<label for="label">
	Label
	<input type="text" name="label">

	<label for="slug">
	Slug
	<input type="text" name="slug">

	<label for="body">
	Body
	<textarea name="body" id="" cols="30" rows="10"></textarea>
	
	<input type="submit" value="Publish">
</form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
