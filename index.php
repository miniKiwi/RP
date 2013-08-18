<?php
/** @file
 * Main HTTP file.
 * Displays the HTTP page and fills it with content depending on $_GET['location'].
 *
 * $_SESSION -variables used:
 * Username (read)
 *
 * $_POST -variables used:
 *
 * $_GET -variables used:
 * location
 * user
 */

ob_start();
session_start();	// start a new session to track data (or continue exisiting)

// This is the URL of this page
$page_url = 'http://www.stefanlindh.se/RP/index.php';  // TODO: hard coded url, need to be changed and saved in config-file.
ini_set('display_errors', 1);	// DEBUG: Show error messages
error_reporting(E_ALL);	// DEBUG: shows all error messages

// Set proper 'location' used in function changelocation
if ( !isset($_SESSION['Username']) )	// Not logged in
{
	if ( isset($_GET['location']) )		// GET['location'] is given (probably means user is currently logging in and trying to reach check_login)
		$location = $_GET['location'];
	else
		$location = 'index';			// go to login
}
elseif ( !isset($_GET['location']) ) {	// no GET['location'] given, but Username set (i.e. user with an active session tried to reach index.php for some reason)
	$location = 'index';				// will show main page
} else {
	$location=$_GET['location'];		// otherwise, location is give from GET['location']
}

$errMsg = isset($_GET['error']) ? $_GET['error'] : null;


// Set some headers
header("Cache-control: no-cache, must-revalidate");
header("Content-language: se");
header("Link: <$page_url?location=index>; rel=\"previous\"; title=\"UTF-8'se'Logged\"");

?>

<!DOCTYPE html>  
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>RP - Design</title>
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="design.css" /> 	
	<!-- mobile settings -->
<!--	<meta name="viewport" content="width=device-width, initial-scale=1" />  mobile settings -->   
  <!--  <link rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.min.css" /> -->
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
   <!-- <script src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script> -->
</head>

<body>

<!-- page structure -->
<div id="pageContainer">
		<header id="pageHeader">		
			<?php include ('header.php'); ?>
						
		</header>

		<nav id="pageNav">
			<ul>
				<li><a href="index.php?location=index">home</a></li>
				<li><a href="index.php?location=profile">profile</a></li>
				<li><a href="index.php?location=rp_participatinglist">rollspel</a></li>
				<li><a href="index.php?location=search">sök</a></li>
			</ul>
		</nav>
				
		<div id="pageMain">
			<?php changelocation($location); /* When function changelocation is called, new content is included here */ ?>
		</div>
			
		<footer id="pageFooter">
				<?php include ('footer.php'); ?>
				
			<?php if( !is_null($errMsg) ) { ?>
				<div style="float: center;" tr class="no_print">			
					<?php echo $errMsg; ?>
				</div>
			<?php } ?>
		</footer>
</div>
</body>
</html>

<?php
// Choose what to display in the content area, depending on $location
function changelocation($location) {
	switch ($location) {
		case 'logout':
			include ('logout.php');
			break;
		case 'checkLogin':
			include ('check_login.php');
			break;
		case 'changePassword':
			include ('changePassword.php');
			break;
		case 'index':
			include ('mainpage.php');
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
		case 'rp_participatinglist':
			include ('rp_participatinglist.php');
			break;
		case 'settings':
			include ('settings.php');
			break;
		case 'roleplay':
			include ('rp_profile.php');
			break;
		case 'createroleplay':
			include ('rp_create.php');
			break;
		case 'editroleplay':
			include ('rp_SLedit.php');
			break;
		case 'FAQ':
			include ('FAQ.php');
			break;

	default:	// should never be reached unless user delibertely typed an undefined location in browser address field...
			echo("<p> INVALID LOCATION '$location'</p>");
			include 'mainpage.php';
	}
}
?>