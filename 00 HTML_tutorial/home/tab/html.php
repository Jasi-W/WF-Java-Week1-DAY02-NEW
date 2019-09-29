<section>
		<?php include("inc/section.php"); ?>
</section>

<article>
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen"><h1>Struktur</h1></button>
		  <button class="tablinks" onclick="openCity(event, 'tab2')"><h1>Elements</h1></button>
		  <button class="tablinks" onclick="openCity(event, 'tab3')"><h1>Vorlagen</h1></button>
		</div>	
		
		<!-- TAB ONE -->
		<div id="tab1" class="tabcontent">
			<p>Ein <b>HTML</b> Dokument besteht aus folgenden Bereichen</p>
			<img src="img/HTML_structure.png" width="40%">
			
			<ul>
				<p><b>HEAD</b> enthält META Daten (CSS, Titel, Author, ...)</p>
				<p><b>BODY</b> ist der sichtbare Bereich des HTML Dokuments</p>
				<ul>
					<p><b>HEADER</b> ist der Kopf auf der Seite (Logo, Name, Login, ...)</p>
					<p><b>NAV</b> wird für die Navigation verwendet</p>
					<p><b>MAIN</b> enthält den Content der Seite (kann in section, article und aside unterteilt werden)</p>
					<p><b>FOOTER</b> ist die Fußzeile der Seite (Copyright, AGBs, Impressum, ...)</p>
				</ul>
			</ul>
			<hr>
			
			<button class="collapsible opacity">show HTML Code</button>
			<div class="filter">
				<img src="img/html_template.png" width="80%">
			</div>
			<hr>
			
			<button class="collapsible opacity">show HEAD Code</button>
			<div class="filter">
				<img src="img/head_template.png" width="90%">
			</div>
			<hr>
		</div>
		
		<!-- TAB TWO -->
		<div id="tab2" class="tabcontent">
			<div class="table">
			<h2>TAGs</h2>
				<div class="td">
					<p>Ein <b>&lt;tag&gt;</b> marktiert Anfang und Ende eins Elements</p>
					<ul>
						<p><b>&lt;tag&gt;</b> Anfangstag</p>
						<p><b>&lt;/tag&gt;</b> Endtag</p>
					</ul>
					
					<p><b>Syntax</b></p>
					<p><b>&lt;tag&gt;</b> Inhalt des Elements <b>&lt;/tag&gt;</b></p>
					<br>
					
					<fieldset>
						<legend>BEISPIEL</legend>
						<p class="center"><b>&lt;p&gt;</b> Hier steht der Text <b>&lt;/p&gt;</b></p>
					</fieldset>
				</div>

				<div class="td">
					<p><b>AUSNAHMEN ohne Endtag!</b></p>
					<p>&lt;br&gt;</p>
					<p>&lt;hr&gt;</p>
					<p>&lt;link&gt;</p>
					<p>&lt;meta&gt;</p>
					<p>&lt;img&gt;</p>
					<p>&lt;input&gt;</p>
					<p>&lt;frame&gt;<p>
				</div>
			</div>
			<hr>


			<h2>Elemente</h2>
			<div class="table">
				<div class="td">
					<h3>sematische Elemente</h3>
					<p>definieren den Inhalt eindeutig.</p>
					<ul>
						<p>&lt;html&gt;</p>
						<p>&lt;head&gt;</p>
						<p>&lt;body&gt;</p>
						<p>&lt;header&gt;</p>
						<p>&lt;nav&gt;</p>
						<p>&lt;main&gt;</p>
						<p>&lt;article&gt;</p>
						<p>&lt;section&gt;</p>
						<p>&lt;aside&gt;</p>
						<p>&lt;footer&gt;</p>
					</ul>
				</div>
		
				<div class="td">
					<h3>NICHT sematische Elemente</h3>
					<p>sagen nichts über den Inhalt aus.</p>
					<ul>
						<p>&lt;div&gt;</p>
						<p>&lt;span&gt;</p>
					</ul>
				</div>
				
				<div class="td">
					<p><i>Beispiel sematische Elemente</i></p>
					<img src="img/html_example.png" width="80%">
				</div>
				
				<div class="td">
					<p><i>HTML Code</i></p>
					<img src="img/example_element.png">
				</div>
			</div>
			<hr>
			
			<h2>CONTAINER</h2>
			<p>sind NICHT sematische Elemente, sie sagen nichts über den Inhalt aus</p>
			<div class="table">
				<div class="td">
					<h3>DIV</h3>
					<p><b>&lt;div&gt;</b> ist ein Container, mit dem andere Elemente gruppiert werden können. Es handelt sich um ein Blockelement, welches den gesammten Absatz verwendet</p>
				</div>

				<div class="td">
					<h3>SPAN</h3>
					<p><b>&lt;span&gt;</b> ist auch ein Container. Es handelt sich um ein Inline-Element, welches nur die benötigte Breite verwendet</p>
				</div>
			</div>
			<hr>
			
			<h2>Überschrift und Text</h2>
			<div class="table">
				<div class="td">
					<img src="img/paragraph.png" width="70%">
				</div>
			
				<div class="td">
					<img src="img/paragraph2.png" width="60%">
				</div>
			</div>
			<hr>
			
			<h2>Textformatierung</h2>
			<div class="table">
				<div class="td right">
					<p><b>&lt;b&gt;</b></p><br>
					<p><b>&lt;i&gt;</b></p><br>
					<p><b>&lt;strong&gt;</b></p><br>
					<p><b>&lt;em&gt;</b></p><br>
					<p><b>&lt;s&gt;</b></p><br>
					<p><b>&lt;sub&gt;</b></p><br>
					<p><b>&lt;sup&gt;</b></p><br>
				</div>

				<div class="td">
					<p><b>fetter</b> Text</p><br>
					<p><i>kursiver</i> Text</p><br>
					<p><strong>starker</strong> Text</p><br>
					<p><em>hervorgehobener</em> Text</p><br>
					<p><s>durchgestrichener</s> Text</p><br>
					<p><sub>tiefgestellter</sub> Text</p><br>
					<p><sup>hochgestellter</sup> Text</p><br>
				</div>
			</div>
			<hr>
		
			<h2>LINKS</h2>
			<img src="img/link.png"><br><br>
			<img src="img/link_anker.png"><br><br>
			<img src="img/link_mailto.png">
			<hr>
			
			<h2>IMAGES</h2>
			<img src="img/img.png"><br><br>
			
			<div class="center">
				<img src="img/html-logo.jpg" width="10%">
			</div>
			<h3>Figure & Figcapture</h3>
			<img src="img/figure.png">
			
			<figure class="center">
				<img src="img/html-logo.jpg" alt="The HTML5 Logo" width="10%">
				<figcaption>The official HTML5-Logo.</figcaption>
			</figure>
		</div>
				
		<!-- TAB THREE -->
			<div id="tab3" class="tabcontent">
			<h2>Listen</h2>
			<div class="table">
				<div class="td">
					<h3>unordered List</h3>
					<ul>
						<li>Eintrag 1</li>
						<li>Eintrag 2</li>
						<li>Eintrag 3</li>
					</ul>
					
					<button class="collapsible opacity">show HTML Code</button>
					<div class="filter">
						<img src="img/ul.png">
					</div>
				</div>

				<div class="td">
					<h3>ordered List</h3>
					<ol>
						<li>Eintrag 1</li>
						<li>Eintrag 2</li>
						<li>Eintrag 3</li>
					</ol>
					<button class="collapsible opacity">show HTML Code</button>
					<div class="filter">
						<img src="img/ul.png">
					</div>
				</div>
			</div>
			<hr>
			<h2>verschachtelte Listen</h2>
			<div class="table">
				<div class="td">
					<h3>unordered List</h3>
					<ul>
						<li>Eintrag 1</li>
						<li>Eintrag 2</li>
						<ul>
							<li>Eintrag 1</li>
							<li>Eintrag 2</li>
							<li>Eintrag 3</li>
						</ul>
						<li>Eintrag 3</li>
					</ul>
					
					<button class="collapsible opacity">show HTML Code</button>
					<div class="filter">
						<img src="img/nested_ul.png">
					</div>
				</div>

				<div class="td">
					<h3>ordered List</h3>
					<ol>
						<li>Eintrag 1</li>
						<li>Eintrag 2</li>
						<ul>
							<li>Eintrag 1</li>
							<li>Eintrag 2</li>
							<li>Eintrag 3</li>
						</ul>
						<li>Eintrag 3</li>
					</ol>
					<button class="collapsible opacity">show HTML Code</button>
					<div class="filter">
						<img src="img/nested_ul.png">
					</div>
				</div>
			</div>
				
			
			

			
			<hr>
			
			<h2>Tabellen</h2>
			
			<table>
				<tr>
					<th>Überschrift - Spalte 1</th>
					<th>Überschrift - Spalte 2</th>
					<th>Überschrift - Spalte 3</th>
				</tr>
				
				<tr>
					<td>Zeile 1 - Eintrag 1</td>
					<td>Zeile 1 - Eintrag 2</td>
					<td>Zeile 1 - Eintrag 3</td>
				</tr>
				
				<tr>
					<td>Zeile 2 - Eintrag 1</td>
					<td>Zeile 2 - Eintrag 2</td>
					<td>Zeile 2 - Eintrag 3</td>
				</tr>
			</table>
			
			<button class="collapsible opacity">show HTML Code</button>
			<div class="filter">
				<img src="img/table.png">
			</div>
			<hr>
			
			<h2>Forms</h2>
			<h3>input</h3>
			<h3>Buttons</h3>
			<h3>Button</h3>
			<h3>Reset</h3>
			<h3>Submit</h3>
			<hr>

			<h2>Fieldset</h2>
			<h3>Legend</h3>
			<hr>
			
			<h2>Audio</h2>
			<p>coming soon...</p>
			<hr>

			<h2>Video</h2>
			<p>coming soon...</p>
			<hr>
		</div>
</article>

<aside>
	<p><b>HTML</b> - Hypertext Markup Language</p>
	<hr>
	
	<p><b>Website</b></p>
	<P>eine Sammlung von einer oder mehreren Webseiten.</p>
	<hr>
	
	<p><b>Webseite/page</b></p>
	<p>ein einzelnes Dokument auf einer Website.</p>
	<hr>
	
	<p><b>Homepage</b></p>
	<p>die Einstiegsseite/Startseite für eine Website, die auf zusätzliche Seiten verweisen kann.</p>
	<hr>
	
	<p><b>Landing-Page</b></p>
	<p>Webseite, auf die man durch Anklicken einer Werbeanzeige gelangt</p>
	<hr>
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
