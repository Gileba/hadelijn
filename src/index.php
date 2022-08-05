<?php
	defined('_JEXEC') or die('Restricted access');

	/** @var JDocumentHtml $this */
	$app      	= JFactory::getApplication();

	/** Output as HTML5 */
	$this->setHtml5(true);

	$menu 		= $app->getMenu();
	$pageclass 	= $menu->getActive()->getParams(true)->get('pageclass_sfx');

	// Logo file or site title param
	$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
		<jdoc:include type="head" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/vendor/fontawesome/css/fontawesome.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/vendor/fontawesome/css/solid.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/vendor/fontawesome/css/brands.min.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body class="<?php echo $pageclass ? htmlspecialchars($pageclass) : 'default'; ?>">
		<div class="container">
			<div class="content">
				<div class="logo"><img src="/templates/hadelijn/images/logo.jpg" alt="<?php echo $sitename ?>" /></div>
				<div class="offcanvas"><jdoc:include type="modules" name="offcanvas" /></div>
				<jdoc:include type="message" />
				<div class="main">
					<div class="left">
						<jdoc:include type="modules" name="left" style="html5" />
					</div>
					<div class="component"><jdoc:include type="component" /></div>
				</div>
			</div>
		</div>
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/hamburger.js"></script>
	</body>
</html>
