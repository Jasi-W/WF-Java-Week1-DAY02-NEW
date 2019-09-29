<?php
	$section = 'home';
	if(isset($_GET['section'])){
		$section = $_GET['section'];
	} 
?>

<div>
	<a href="index.php?section=home" <?php if($section == 'home'){echo 'class="nav_active"';}?> >HOME</a>
	<a href="index.php?section=git" <?php if($section == 'git'){echo 'class="nav_active"';}?> >Git & GitHub</a>
	<a href="index.php?section=html" <?php if($section == 'html'){echo 'class="nav_active"';}?> >HTML5</a>
	<a href="index.php?section=css" <?php if($section == 'css'){echo 'class="nav_active"';}?> >CSS</a>
	<a href="index.php?section=javascript" <?php if($section == 'javascript'){echo 'class="nav_active"';}?> >JavaScript</a>
	<a href="index.php?section=exercises" <?php if($section == 'exercises'){echo 'class="nav_active"';}?> >Exercises</a>
	<a href="index.php?section=codereview" <?php if($section == 'codereview'){echo 'class="nav_active"';}?> >CodeReview</a>
</div>
