<?php

include '../includes/content.php';

$found = false;

foreach($projects as $project) {
	if($project['slug'] == $_GET['project']) {
		if(!$found) {
			$found = true;
			$title = $project['title'];
			$description = $project['title'].' is a project in the portfolio of graphic designer and front-end developer Tyler Paulson.';
		}
	}
}

if(!$found) {
	header('HTTP/1.1 404 Not Found');
	$title = '404 Not Found';
}

include '../includes/header.php';

if($found) {
	include '../includes/projects/'.$_GET['project'].'.php';
} else {
	echo '<div class="project"><p><strong>404 Error</strong><br>The project could not be found.</p></div>';
}

include '../includes/footer.php';

?>