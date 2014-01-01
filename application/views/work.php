
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $work->title; ?></title>
	<link rel="stylesheet" href="/css/work.css" type="text/css">
</head>
<body>
	<div class="single item">
		<h2>(<?php echo $work->year; ?>)</h2>
		<h1><?php echo $work->title; ?></h1>
		<h3><?php echo $work->details; ?></h3>
		<br>
		<?php if ($work->img1 != "") { ?>
		<img src='<?php echo $work->img1; ?>'><br>
		<?php } ?>
		<?php if ($work->img2 != "") { ?>
		<img src='<?php echo $work->img2; ?>'><br>
		<?php } ?>
		<p class="description"><?php echo $work->description; ?></p>
	<div>
	
</body>
</html>