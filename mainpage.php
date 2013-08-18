<div id="sidebarMenu">
<?php			
	if( isset($_SESSION['Username']) ) {
		if( isset($_SESSION['Username']) ) {
			$loggedIn = 'You are currently logged in as <b>' . $_SESSION['Username'] . '</b>.';
			} else {
				$loggedIn = 'You are not currently logged in.';
			}

		if( isset($_SESSION['Username']) ) {
		$login_action = isset($_SESSION['Username']) ? "logout" : "index";
		$login_value = isset($_SESSION['Username']) ? "Logout" : "Index";
		?>
		<li>
			<form name="Logout"  class="menuform" method="POST" action="index.php?location=<?php echo $login_action; ?>">
				<input type="Submit" class="button" name="SubmitLogout" value="<?php echo $login_value; ?>" title="Logout">
			</form>
		</li>
		<?php
		} else {
			// Dont show the logout button
		}

	} else {
		?>
			<section>
				<form name="login" id="login" method="post" action="index.php?location=checkLogin">	<!-- POST to index.php with GET['location']=checkLogin -->
					<b>LOGGA IN</b>
					<div>
						<input name="myusername" type="text" id="myusername" placeholder="Användarnamn" autofocus required>
					</div>
					<div>
						<input name="mypassword" type="password" id="mypassword" placeholder="Lösenord" required>
					</div>
					<div>
						<li>
							<input type="submit" class="button" value="Logga in" />
						</li>
					</div>
				</form><!-- form -->
			</section><!-- content -->
		<?php
		}	
		?>

	<hr>
	<ul>
		    <li><a href="#">Skriv</a></li>
			<li><a href="#">Här finns länkar som hör ihop med sidan som spelaren är inne på</a></li>
			<li><a href="#">Ett rollspel skulle länkarna här vara skriv, joina (om spelaren inte är med i rollspelet) alternativt (om spelaren är med och vill gå ur).</a></li>
			<br>
			<li><a href="#">Lämna / Joina</a></li>
		</ul>
</div>

<div id="mainContent">
        <p>
		<h1>Index</h1><br>
		This is mainpage.php<br>
	    This is main content. It's supposed to be a lot of text.
		Detta är designen till en rollspelssida som inte har något namn ännu.<br>
		Detta första (och enda) sidan. ^^<br>
		Här kan man titta på den fina designen, klicka på alla länkar och uppdatera sidan då ch då ifall det kommer nya överraskningar. :)<br>
		<br>
			Just nu finns nog bara en medlem, men denna sidan är inte kopplad till databasen så den informationen går inte att visa här.<br>
			<br>
			Man kan ännu inte skapa rollspel, och därför finns det inte heller några än.<br>
			<br>
			De mest aktiva här är utvecklarna av sidan.<br>
			<br>
	        Innan du börjar rollspela kan det vara bra att läsa sidans regler, som finns <a href="tos.html">här</a>. Detta är mainpage.php
		    </p>
	</div>