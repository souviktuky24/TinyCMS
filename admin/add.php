<?php
require '../app/start.php';

if(!empty($_POST)){

	$label = $_POST['label'];
	$title = $_POST['title'];
	$slug  = $_POST['slug'];
	$body  = $_POST['body'];

	$newPage = $db->prepare("
		INSERT INTO pages(label, title, slug, body, created)
		VALUES (:label, :title, :slug, :body, NOW())

	");

	$newPage->execute([
		'label' => $label,
		'title' => $title,
		'slug'  => $slug,
		'body'  => $body,
		]);

	header('location:' . BASE_URL . '/admin/list.php');
}

require VIEW_ROOT . '/admin/add.php';