<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="design.css">
    <title>RP - Design</title>
	
	
</head>

<body>

<?php 
// Include necessary files and connect to database:
include_once('classes/clsDatabase.php');
include_once('classes/clsFunctions.php');
include_once('classes/clsConnect.php');

Connect::openConnection();
?>

<?php
// Choose what to display in the content area, depending on $location
function changelocation($location) {
	switch ($location) {
//		case 'login':
//			include ('main_login.php');
//			break;
//		case 'logout':
//			include ('logout.php');
//			break;
//		case 'checkLogin':
//			include ('check_login.php');
//			break;
//		case 'changePassword':
//			include ('changePassword.php');
//			break;
//		case 'index':
//			include ('start.php');
//			break;
		case 'main':
			include ('main.php');
			break;
		case 'profile':
			include ('profile.php');
			break;

	default:	// should never be reached unless user delibertely typed an undefined location in browser address field...
			echo("<p> INVALID LOCATION '$location'</p>");
			include 'main.php';
	}
}
?>
<header>
<?php include ('header.php'); ?>
</header>
<div id="content">
	<div id="sidebar">

		<?php include ('userinfo.php'); ?>
		<hr>
	    <?php changelocation($location); /* When function changelocation is called, new content is included here */ ?>
</div>
	<footer>
	    <p>
		© Stefan & Hanna 2012 | <a href="tos.html">Rules</a> | Change design
	<select>
        <option>Space blue</option>
        <option>Nature green</option>
        <option>Tea xD</option>
    </select>
	 | Svflag Enflag
		</p>
	</footer>
</body>
</html>