<section>
		<?php include("inc/section.php"); ?>
</section>

<article>
	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen"><h1>Kontakt</h1></button>
	  <button class="tablinks" onclick="openCity(event, 'tab2')"><h1>Kursplan</h1></button>
	  <button class="tablinks" onclick="openCity(event, 'tab4')"><h1>Noten</h1></button>
	</div>	
	
	<!-- TAB ONE -->
	<div id="tab1" class="tabcontent">
		<div class="table">
			<div class="td">
				<a href="codefactory.wien" target = "_blank">
					<img src="img/codefactory.png" height="40px">
				</a><br><br>
				
				<h3>CodeFactory</h3>
				<p>Kettenbrückengasse 23/2/12</p>
				<p>1050 Wien</p><br>
				<p>&phone; +43 660 6673655</p>
				<p>&commat; <a href="mailto:office@codefactory.wien"> office@codefactory.wien</a></p><br>
			</div>

			<div class="td">
				<a href="www.ams.at" target = "_blank">
					<img src="img/ams.png" height="40px">
				</a><br><br>
				
				<h3>AMS</h3>
				<p>Jägerstraße 66</p>
				<p>1200 Wien</p><br>
				<p>&phone; 05 09 04 940</p>
				<p>&commat; <a href="mailto:ams.jaegerstrasse@ams.at"> ams.jaegerstrasse@ams.at</a></p><br>
			</div>
			
			<div class="td">
				<a href="waff.at" target = "_blank">
					<img src="img/waff.png" height="40px">
				</a><br><br>
				
				<h3>WAFF</h3>
				<p>Nordbahnstraße 36</p>
				<p>1200 Wien</p><br>
				<p>&phone; 01 217 48 777</p>
				<p>&commat; <a href="mailto:19ait@ai.waff.at"> 19ait@ai.waff.at</a></p><br>
			</div>
			
			<div class="td">
				<a href="www.ibm.com/employment/ciceurope/at-de" target = "_blank">
					<img src="img/ibm.jpg" height="40px">
				</a><br><br>
				
				<h3>IBM Client Innovation Center</h3>
				<p>DC Tower, Donau-City-Straße 7</p>
				<p>1220 Wien</p><br>
				<p>&phone; +43 1 21145-0</p>
				<p>&commat;<i class="gray"> nicht bekannt</p></i><br>
			</div>
		</div>
		<hr>
	</div>
	
	<!-- TAB TWO -->
	<div id="tab2" class="tabcontent">
		<img src="img/kursplan.jpg" width="100%">
	</div>

	<!-- TAB THREE -->
	<div id="tab3" class="tabcontent">
	
	</div>
</article>

<aside>
	<h3>Kurszeiten</h3>
	<div class="table colum_2">
		<div class="td right bold">
			<p>Montag</p>
			<p>Dienstag</p>
			<p>Mittwoch</p>
			<p>Donnerstag</p>
			<p>Freitag</p>
			<p class="gray">Samstag</p>
			<p class="gray">Sonntag</p>
		</div>
		
		<div class="td column_2">
			<p>09:00 - 17:00</p>
			<p>09:00 - 17:00</p>
			<p>09:00 - 17:00</p>
			<p>09:00 - 17:00</p>
			<p>09:00 - 15:30</p>
			<p class="gray">Geschlossen</p>
			<p class="gray">Geschlossen</p>
		</div>
	</div>
	<hr>
	
	<h3>Laufzeit</h3>
	<p class="center">09/2019 - 01/2020</p>
</aside>

<script>
	document.getElementById("defaultOpen").click();

	function openCity(evt, tabName) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(tabName).style.display = "block";
	  evt.currentTarget.className += " active";
	}
</script>	
