<?php			

$loggedIn = '<span class="no_print">';
$admin = '<a href="admin/index.php">Admin</a>';
$img = '<img src="images/Majestic-Perch---Golden-Eagle-1_avatar120px.jpg" border="1">';
if( isset($_SESSION['Username']) ) {
	$loggedIn .= $admin . '<br>' . 'You are currently logged in as <b>' . $_SESSION['Username'] . '</b>.';
} else {
	$loggedIn .= $img . '<br>' . '<a href="profile.html">' . 'användarnamn' . '</a>' . '<br>' . '<b>Level: </b>' . 'level' . '<br>' . '<b>Meddelanden: </b>' . '0';
	// 'You are not currently logged in.';
}

echo $loggedIn;

?>
