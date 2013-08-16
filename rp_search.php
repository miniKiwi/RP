<div id="mainContent">
	    <section>
		Sökruta (denna blir minimerad när spelaren har skickat sin sökning. Den kan vecklas ut igen med en pil)<br>
		<form action="">
		    Namn på rollspel <input type="text" name="name_rp"> 
			Namn på spelledare <input type="text" name="name_sl">
		</form>
			Genre 
			Låst/öppet (on/off knapp)<br>
			<div class="onoffswitch">
				<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
					<label class="onoffswitch-label" for="myonoffswitch">
						<div class="onoffswitch-inner"></div>
						<div class="onoffswitch-switch"></div>
					</label>
			</div>
			Antal spelare (nu/ev. max)
		<form action="">
			Min antal spelare <input type="text" name="min_participants">
		    Aktiva spelare <input type="text" name="current_participants"> 
			Max antal spelare <input type="text" name="max_participants">
		</form>			
			Nivå
			<form action="">
				<select name="levels">
					<option value="volvo">Novice</option>
					<option value="saab">Saab</option>
					<option value="fiat">Expert</option>
					<option value="audi">Elite</option>
				</select>
			</form>
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
				Rollspel 1
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