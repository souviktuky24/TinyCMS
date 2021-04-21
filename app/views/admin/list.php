<?php require VIEW_ROOT . '/templates/header.php'; ?>
  
	<?php if(empty($pages)) : ?>
		<p>Sorry, there are no pages at the moment. </p>
	<?php else : ?>
		<div style="overflow-x:auto;">
		<table>
			<thead>
				<tr>
					<th>Label</th>
					<th>Title</th>
					<th>Slug</th>
					<th></th>
					<th></th>

				</tr>
			</thead>
			<tbody>
			    <?php foreach ($pages as $page) : ?>
				<tr>
					<td><?php echo esc($page['label']); ?></td>
					<td><?php echo esc($page['title']); ?></td>
					<td><a target="_blank" href="<?php echo(BASE_URL); ?>/page.php?page=<?php echo esc($page['slug']); ?>"><?php echo esc($page['slug']); ?></a></td>
					<td><a class="link" href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo esc($page['id']); ?>">Edit</a></td>
					<td><a class="link" href="<?php echo (BASE_URL); ?>/admin/delete.php?id=<?php echo esc($page['id']); ?>">Delete</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		</div>
	<?php endif; ?>

<p><a class="link" href="<?php echo BASE_URL; ?>/admin/add.php">Add new page</a></p> 

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
