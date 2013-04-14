<?PHP require_once('core.php'); ?>
<!DOCTYPE html>
<?PHP showHeader(); ?>
<body>
	<h1><?PHP $config->blogname ?></h1>
	<h3><?PHP $config->tagline ?></h3>
	<?PHP if (!empty($_GET['post'])) { showPost(); } else if (!empty($_GET['page'])) { showPage(); } else { showIndex(); } ?>
	<?PHP showFooter(); ?>
</body>
</html>