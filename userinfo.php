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