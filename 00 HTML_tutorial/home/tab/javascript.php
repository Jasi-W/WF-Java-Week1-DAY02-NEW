<section>
		<?php include("inc/section.php"); ?>
</section>

<article>
	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen"><h1>Tab 1</h1></button>
	  <button class="tablinks" onclick="openCity(event, 'tab2')"><h1>Tab 2</h1></button>
	  <button class="tablinks" onclick="openCity(event, 'tab3')"><h1>Tab 3</h1></button>
	</div>	
	
	<!-- TAB ONE -->
	<div id="tab1" class="tabcontent">


	</div>
	
	<!-- TAB TWO -->
	<div id="tab2" class="tabcontent">

		
	</div>

	<!-- TAB THREE -->
	<div id="tab3" class="tabcontent">

	
	</div>
</article>

<aside>
</aside>
	
<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
	  coll[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var content = this.nextElementSibling;
		if (content.style.maxHeight){
		  content.style.maxHeight = null;
		} else {
		  content.style.maxHeight = content.scrollHeight + "px";
		} 
	  }); }
</script>

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

	
