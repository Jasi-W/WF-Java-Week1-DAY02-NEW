<?php 
	$section = "home";
	if(isset($_GET['section'])){
		$section = $_GET['section'];
	}
	switch($section){
		
		case "git":
			include("tab/git.php");
			break;
		
		case "html":
			include("tab/html.php");
			break;
			
		case "css":
			include("tab/css.php");
			break;
			
		case "javascript":
			include("tab/javascript.php");
			break;

		case "exercises":
			include("tab/exercises.php");
			break;
			
		case "codereview":
			include("tab/codereview.php");
			break;
			
		default:
			include("tab/home.php");
	} 
?>
