<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div class="header">

		<div class="wrapper">
			<h1 class="branding-title"><a href="./">Need to Discuss</a></h1>
  			<ul class="nav">
            <li class="tv<?php if($section == "tv") {echo " on";} ?>"><a href="catalog.php?cat=tv">TV</a></li>
            <li class="movies<?php if($section == "movies") {echo " on";} ?>"><a href="catalog.php?cat=movies">Movies</a></li>
            <li class="other<?php if($section == "other") {echo " on";} ?>"><a href="catalog.php?cat=other">Other</a></li>
            <li class="suggest<?php if($section == "suggest") {echo " on";} ?>"><a href="suggest.php">Suggest</a></li>
        </ul>
		</div>

	</div>

	<div id="content">
