<section>
		<?php include("inc/section.php"); ?>
</section>

<article>
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen"><h1>Allgemein</h1></button>
		  <button class="tablinks" onclick="openCity(event, 'tab2')"><h1>Anleitung</h1></button>
		  <button class="tablinks" onclick="openCity(event, 'tab3')"><h1>Cheat Sheet</h1></button>
		</div>	
		
		<!-- TAB ONE -->
		<div id="tab1" class="tabcontent">

			<div class="table">
				<div class="td center">
					<img src="img/git.png" height="40px">
					<p><b>Git</b> ist eine freie Software zur verteilten Versionsverwaltung von Dateien.</p>
				</div>
				
				<div class="td center">
					<img src="img/github.jpg" height="40px">
					<p><b>GitHub</b> ist ein Onlinedienst. der Software-Entwicklungsprojekte auf seinen Server bereitstellt.</p>
				</div>
			</div>
			
			<div class="center">
				<img src="img/git-plan.png" width="40%">
			</div>
		</div>
		
		<!-- TAB TWO -->
		<div id="tab2" class="tabcontent">
			<h3>Step by step...</h3>
			<ol>
				<li>git-bash installieren</li>
				<li>Account auf <a href="github.com" target="_blank">GitHub</a> anlegen</li>
				<li>Repository auf GitHub anlegen</li>
				<li>Ordner auf Client auswählen/anlegen</li>
				<li>Client-Ordner mit GitHub verbinden</li>
				<li>Änderungen mit <b>pull/push</b> synchronisieren</li>
			</ol>
			
			<h3>Pull & Push</h3>
			<ul>
				<li>git pull</li>
				<li>git add .</li>
				<li>git commit -m "<i>message</i>"</li>
				<li>git push</li>
				<li>git status</li>
			</ul>
				
			<p>...Collaborator</p>
			<p>...clone a project</p>
		</div>

		<!-- TAB THREE -->
		<div id="tab3" class="tabcontent">
			<img src="img/git-cheatsheet_01.jpg" width="100%">
			<img src="img/git-cheatsheet_02.jpg" width="100%">
		</div>
</article>

<aside>
	
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
