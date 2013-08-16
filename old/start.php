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
// Set proper 'location' used in function changelocation
if ( !isset($_SESSION['Username']) )	// Not logged in
{
	if ( isset($_GET['location']) )		// GET['location'] is given (probably means user is currently logging in and trying to reach check_login)
		$location = $_GET['location'];
	else
		$location = $_GET['location'];
		//$location = 'login';			// go to login
}
elseif ( !isset($_GET['location']) ) {	// no GET['location'] given, but Username set (i.e. user with an active session tried to reach index.php for some reason)
	$location = 'index';				// will show welcome page
} else {
	$location=$_GET['location'];		// otherwise, location is give from GET['location']
}

$errMsg = isset($_GET['error']) ? $_GET['error'] : null;
?>

<?php
// Choose what to display in the content area, depending on $location
function changelocation($location) {
	switch ($location) {
		case 'login':
			include ('main_login.php');
			break;
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
		case 'tos':
			include ('tos.php');
			break;
		case 'search':
			include ('rp_search.php');
			break;
		case 'character':
			include ('char_profile.php');
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
		© Stefan & Hanna 2012 | <a href="start.php?location=tos">Rules</a> | Change design
	<select>
        <option>Space blue</option>
		<option>Metallic</option>
        <option>Nature green</option>
        <option>Tea xD</option>
    </select>
	 | Svflag Enflag
		</p>
	</footer>
</body>
</html>