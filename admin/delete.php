<?php

require '../app/start.php';

if(!empty($_GET['id'])) {
	$id = $_GET['id'];

	$deletePage = $db->prepare("
		DELETE FROM pages
		WHERE id = :id
	");

	$deletePage->execute(['id' => $id]);

	header('location:' .BASE_URL. '/admin/list.php');
}

header('location:' .BASE_URL. '/admin/list.php');