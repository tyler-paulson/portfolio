<?php 

$status = $_SERVER['REDIRECT_STATUS'];

$codes = array(
	403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
	404 => array('404 Not Found', 'The document / file requested was not found on this server.')
);

include 'includes/content.php';

$title = $codes[$status][0];

include 'includes/header.php';

echo '<div class="project"><p><strong>'.$codes[$status][0].'</strong><br>'.$codes[$status][1].'</p></div>';

include 'includes/footer.php';

?>