<?php

$splash = true;

include 'includes/content.php';

include 'includes/header.php';

foreach ($projects as $project) { 	
	include 'includes/projects/'.$project['slug'].'.php'; 
}

include 'includes/footer.php';

?>
