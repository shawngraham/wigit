<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php print $wikiTitle ?> &raquo; Editing <?php print $wikiPage ?></title>
		<link rel="stylesheet" type="text/css" href="<?php print $wikiCSS ?>" />
	</head>
	<body>
		<div id="navigation">
			<p><a href="<?php print $wikiHome ?>">Home</a></p>
		</div>

		<div id="header">
			<h1 id="title">Editing <?php print $wikiPage ?></h1>
		</div>

		<div id="form">
			<form method="post" action="<?php print $wikiPostURL; ?>">
				<p><textarea name="data" cols="80" rows="20" style="width: 100%"><?php print $wikiData; ?></textarea></p>
				<p><input type="submit" value="publish" /></p>
			</form>
		</div>

		<div id="footer">
			<?php if ($wikiUser != "") { ?>
				<p>Logged in as <?php print $wikiUser; ?></p>
			<?php } ?>
		</div>

	</body>
</html>
