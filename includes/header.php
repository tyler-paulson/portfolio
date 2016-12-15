<?php header('X-UA-Compatible: IE=edge'); ?>
<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<title><?php if(isset($title)) { echo $title; } else { echo 'Tyler Paulson Design &amp; Development'; } ?></title>

	<meta name="description" content="<?php if(isset($description)) { echo $description; } else { echo 'Central Pennsylvania based graphic designer and front-end developer.'; } ?>">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="dns-prefetch" href="//s3.amazonaws.com">

	<!--[if IE]><link rel="shortcut icon" href="/favicon.ico"><![endif]-->
	<!--[if !IE]><!--><link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico"><!-- <![endif]-->

	<link rel="stylesheet" href="/css/global.css">

	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
	<![endif]-->
	
	<script>var splash = <?php if(isset($splash) && $splash == true) { echo 'true'; } else { echo 'false'; } ?>;</script>

	<!--[if gt IE 8]>
		<script async src="/js/body.ck.js"></script>
	<![endif]-->

	<!--[if !IE]> -->
		<script async src="/js/body.ck.js"></script>
	<!-- <![endif]-->

</head>

<body>

	<div class="top"><div class="wrap">

		<nav class="nav" role="navigation"><ul>

<?php
foreach ($projects as $project) { 	
	echo '<li><a href="/project/'.$project['slug'].'">'.$project['title'].'</a></li>'; 
}
?>

		</ul></nav>

		<header class="header" role="banner">
			<a class="header--logo" href="/">
				<noscript>Tyler Paulson Design &amp; Development</noscript>
				<script>document.write('<span class=\"header--logo--1\">tyler_paulson</span><span class=\"header--logo--3\">(</span><span class=\"header--logo--2\">design</span><span class=\"header--logo--3\">)</span><span class=\"header--logo--3\">:development</span>'); </script>
			</a>
			<div class="header--subtitle header--subtitle-short">Central Pennsylvania based graphic designer and front-end developer.</div>
			<div class="header--contact">
				<noscript><span>+1 570 478 5712</span></noscript>
				<script>document.write('<a href="tel:+15704785712">+1 570 478 5712</a>');</script>
				-
				<noscript><span>hello@tylerpaulson.com</span></noscript>
				<script>document.write('<a href="mailto:hello@tylerpaulson.com">hello@tylerpaulson.com</a>');</script>
			</div>
			<div class="header--links">
				<a href="https://github.com/tyler-paulson/resume" id="resume">Resume</a>
				-
				<a href="http://witharedhyssop.com">Blog</a>
			</div>
		</header>

	</div></div>

	<article class="projects" role="main"><div class="wrap">
