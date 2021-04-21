<?php

require '../app/start.php';

$pages = $db->query("
	SELECT id, label,title,slug 
	FROM pages
	ORDER BY created DESC
	")->fetchAll(PDO::FETCH_ASSOC);

require '../app/views/admin/list.php';
