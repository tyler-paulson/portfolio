<?php
include 'includes/content.php';
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

	<url>
	<loc>http://tylerpaulson.com</loc>
	<changefreq>daily</changefreq>
	<priority>0.75</priority>
	</url>

<?php foreach ($projects as $project) { ?>
	<url>
	<loc>http://tylerpaulson.com/project/<?php echo $project['slug']; ?></loc>
	<changefreq>monthly</changefreq>
	<priority>0.5</priority>
	</url>
<?php } ?>

</urlset> 