<?php session_start(); ?>

<?php

// Include necessary files and connect to database:
include_once('classes/clsDatabase.php');
include_once('classes/clsFunctions.php');
include_once('classes/clsConnect.php');

Connect::openConnection();

// Make sure variables to be used are empty:
$char_id = "";
$user_id = "";
$char_name = "";
$char_theme = "";
$char_type = "";
$char_short_description = "";
$char_presentation = "";

$sql = "SELECT MAX(ID) AS ID FROM ".Database::Characters;
$result = mysql_query($sql);

if (isset($_POST['Submit'])) { // Data was POSTed here - add animal to database:
	$alert = ""; // Placeholder for error message to user

	
	$char_name = $_POST['char_name'];
	if($char_name == "") {
		$alert .= "Character name is empty! ";
	} else {
		$char_name = mysql_real_escape_string($char_name);
	}

	$char_theme = $_POST['char_theme'];
	if($char_theme == "") {
		$alert .= "Character theme is empty! ";
	} else {
		$char_theme = mysql_real_escape_string($char_theme);
	}

	$char_type = $_POST['char_type'];
	if($char_type == "") {
		$alert .= "Character type is empty! ";
	} else {
		$char_type= mysql_real_escape_string($char_type);
	}
	
	$char_short_description = $_POST['char_short_description'];
	if($char_short_description == "") {
		$alert .= "The character's short description is empty! ";
	} else {
		$char_short_description= mysql_real_escape_string($char_short_description);
	}
	
	$char_presentation = $_POST['char_presentation'];
	if($char_presentation == "") {
		$alert .= "Character presentation is empty! ";
	} else {
		$char_presentation= mysql_real_escape_string($char_presentation);
	}

	if ($alert != "") { // an error has been detected in the POSTed data
		?><script type="text/javascript">alert("<?php echo $alert;?>");</script>
		<?php // Alert the user (user will not be added to database)
	}
	else { // no error found in POSTed data, go ahead and add animal to database
		// Check if username and ID is occupied in database:
		$resultat = mysql_query("SELECT ID FROM `".Database::Characters."` WHERE char_name='$char_name' ");
		$loginIsOccupied = mysql_num_rows($resultat) > 0;

		if( !$loginIsOccupied ) {
			// add user to user table
			$SQL1 = "
			INSERT INTO ".Database::Characters." (`char_name`, `char_theme`, `char_type`, `char_short_description`, `char_presentation`)
			VALUES ('$char_name', '$char_theme', '$char_type', '$char_short_description', '$char_presentation') ";
			$result1 = mysql_query($SQL1);

		
			
				
			?>		
			<script type="text/javascript">
				/* Reload parent window and close this window. Some issues
				 * have been reported in certain browsers but we have so
				 * far been unable to duplicate them.
				 */
				opener.location.reload(true);
				self.close();
			</script>
			<?php

		} elseif( $loginIsOccupied ) {
			echo '<script type="text/javascript">alert("Animal_Name_Latin! Var god försök igen.")</script>';
		} 
	}
} // end: add animal to database
mysql_close();

?>
<?php include ('userinfo.php') ?>
<div id="sidebarMenu">
		<ul><form name="InsertNew" method="post" action="index.php?location=createcharacter&char_name=<?php echo $char_name;?>">
		    <li><input type="submit" name="Submit" class="button" value="Spara" onclick="javascript:return validateform();"></li>
	</div>

    <div id="mainContent">
	    Namn: <input type="text" name="char_name" id="char_name" required value="<?php echo $char_name ?>"><br><br>
		Typ: <input type="text" name="char_type" id="char_type" required value="<?php echo $char_type ?>"><br><br>
		Genre: <input type="text" name="char_theme" id="char_theme" required value="<?php echo $char_theme ?>"><br><br>
		Kön: <input type="text" name="char_gender" id="char_gender" required value="<?php echo $char_gender ?>"><br><br>
		Ålder: <input type="text" name="char_age" id="char_age" value="<?php echo $char_age ?>"><br><br>
		Kort info: <input type="text" size="70" maxlength="100" name="char_short_description" id="char_short_description" required value="<?php echo $char_short_description ?>"><br><br>
		Presentation: <br>
		<textarea rows="10" cols="70" maxlength="10000" name="char_presentation" id="char_presentation" value="<?php echo $char_presentation ?>"></textarea>
		</form>
	</div>
	        <section>
	<div id="mainSecond">
	temp empty ..
	</div>
			</section>

