<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>works</title>
	<link rel="stylesheet" href="/css/work.css" type="text/css">
</head>
<body>

<?php foreach ($works as $work) : ?>
	<div class="item"> 
	    <img class="thumbnail" src='<?php echo $work->thumbnail; ?>' />
	    <a href='/work/<?php echo $work->id; ?>'><?php echo $work->title; ?> >></a>
	    <div class='details'><?php echo $work->details; ?></div>
	</div>
<?php endforeach; ?>
	
</body>
</html>
