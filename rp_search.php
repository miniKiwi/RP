<div id="sidebarMenu">
		<ul>
		    <li><a href="index.php?location=createroleplay">Starta nytt rollspel</a></li>
			<br>
			<li><a href="#">-</a></li>
		</ul>
</div>
<div id="mainContent">
Sökruta (denna blir minimerad när spelaren har skickat sin sökning. Den kan vecklas ut igen med en pil)<br>
	<table>
		<tr>
			<th>
			Namn på rollspel
			</th>
			<th>
			Namn på spelledare
			</th>
			<th>
			Genre
			</th>
			<th>
			Låst/öppet
			</th>
			<th>
			Antal spelare (nu/ev. max)
			</th>
			<th>
			Nivå
			</th>
		</tr>
		<tr>
			<td>
				<form action="">
				<input type="text" name="name_rp"> 
			</td>
			
			<td>
				<input type="text" name="name_sl">
				</form>
			</td>
			
			<td>
			dropdown?
			</td>
			
			<td>
				<div class="onoffswitch">
				<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
					<label class="onoffswitch-label" for="myonoffswitch">
						<div class="onoffswitch-inner"></div>
						<div class="onoffswitch-switch"></div>
					</label>
				</div>
			</td>
			
			<td>
<!--				<form action="">
				Min antal spelare <input type="text" name="min_participants">
				Aktiva spelare <input type="text" name="current_participants"> 
				Max antal spelare <input type="text" name="max_participants">
				</form>	-->
			</td>
			
			<td>
				<form action="">
					<select name="levels">
						<option value="volvo">Novice</option>
						<option value="saab">Saab</option>
						<option value="fiat">Expert</option>
						<option value="audi">Elite</option>
					</select>
				</form>
			</td>
		</tr>
	</table>
		<br>
</div>
	<div id="mainSecond">
		<table class="tableSearch">
			<tr>
				<th>
				Namn på rollspel
				</th>
				<th>
				Namn på spelledare
				</th>
				<th>
				Genre
				</th>
				<th>
				Kort beskrivning
				</th>
				<th>
				Nivå
				</th>
				<th>
				Antal spelare (nu/ev. max)
				</th>
				<th>
				Låst/öppet
				</th>
			</tr>
				
			<tr>
				<td>
				<a href="index.php?location=roleplay">Rollspel 1</a>
				</td>
				<td>
				Spelledares namn
				</td>
				<td>
				Fantasy
				</td>
				<td>
				Kort beskrivning här
				</td>
				<td>
				Elite
				</td>
				<td>
				2/10
				</td>
				<td>
				öppet (img)
				</td>
			</tr>
		</table>
	    </section>
	</div>