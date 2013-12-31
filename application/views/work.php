<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($works as $work) : ?>
<div style="background-color: #dddddd; margin: 0px 2px 0px 2px">
    <h2><?php echo $work->title; ?></h2>
    <pre><?php echo $work->description; ?></pre>
</div>
<?php endforeach; ?>
	
</body>
</html>
