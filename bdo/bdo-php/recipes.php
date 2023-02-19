<!doctype html>
<html lang="en">
<head>
	<title>BDO Recipes</title>
	<meta charset="UTF-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="scripts/css/common.css" />
	<link rel="icon" type="image/x-icon" href="images/fav/alchemy.ico">
	<script src="../scripts/jquery/3.6.3.min.js"></script>
	<script src="../scripts/jquery/allow-drop.js"></script>
	<script src="../scripts/jquery/plus-minus.js"></script>
	<script src="../scripts/jquery/show-only-one.js"></script>
	<script src="../scripts/jquery/toggle-div.js"></script>
	<script src="../scripts/jquery/ui-1.13.1.js"></script>

</head>
<body id="bdo-recipes" class="common">


	<!-- #region - Buttons -->
		<div id="nav-buttons" class="drag-area">
			
			<!-- #region - Home Button -->
				<div class="button home-button">

					<a title="GitHub Home Page" class="button-link" href="../index.html">

						 <img class="icons icons1" src="../images/home.webp" alt="Icon" /> 

					</a>

					<div class="right">
					</div>

				</div>
			<!-- #endregion - Home Button -->


			<!-- #region - Alchemy Button -->
				<div class="button alchemy-recipes-button">

					<a title="Alchemy" class="button-link" href="javascript:showonlyone('recipes-alchemy');">
						 <img class="icons icons1 alchemy-icon" src="images/icons/processing/simple-alchemy.webp" alt="Icon" /> Alchemy Recipes
					</a>

					<div class="right">
					</div>

				</div>
			<!-- #endregion - Alchemy Button -->


			<!-- #region - Cooking Button -->
				<div class="button cooking-recipes-button">

					<a title="Cooking" class="button-link" href="javascript:showonlyone('recipes-cooking');">
						 <img class="icons icons1" src="images/icons/processing/simple-cooking.webp" alt="Icon" /> Cooking Recipes
					</a>

					<div class="right">
					</div>

				</div>
			<!-- #endregion - Cooking Button -->


			<!-- #region - Thanks Button -->
				<div class="button bdocodex-button">

				<a title="bdocodex.com" class="button-link" href="https://bdocodex.com/us/" target="_blank">

				 <img class="icons bdocodex-icon" src="images/icons/menu/bdo-codex.webp" alt="Icon" /> 
				Thanks to Kiriak for the help and BDO Codex!
				</a>

				<div class="right">
				</div>

				</div>
			<!-- #endregion - Thanks Button -->


			<!-- #region - Info Button -->
				<div class="button info-button">

					<a title="Click to Show Information" class="button-link" href="javascript:toggleDiv('info-box');">
						Information ℹ️
					</a>
				
					<div class="right">
					</div>
				
				</div>
			<!-- #endregion - Info Button -->


		</div>
	<!-- #endregion - Buttons -->

	<!-- #region - info -->
		<div id="info-box" class="info-box">
			<div class="right">
				<a title="Click to Close" href="javascript:toggleDiv('info-box');">
					 <img class="icons icons1 x-icon" src="images/icons/menu/x-button.webp" alt="X" />
				</a>
			</div>
			<br />
			<p class="h1 gold">Features:</p>
			<p>-Click the Name of the item to open up the content.</p>
			<br />
			<p>-Click the link icon to go it's BDOCodex Page.</p>
			<br />
			<p>
			-You can click the Compare Window Button Link, To bring up a Comparsion Window. 
			<br /><br />
			Then you can Drag the item into the columns.
			<br />
			*(Drag by the blank space by the name)
			</p>
			<br />
			<p>-Refreshing the page resets everything.</p>
			<br />
			<p>-CP Cheapest Route for Materials.</p>
			<br />
			<p class="h1 blue1">Discord</p>
			- DarkAoRaidenX#6672
			<br />
			Message if any errors,suggestions,help.
			<br />
			<br />
			<br />
		</div>
	<!-- #endregion - info -->

	<!-- #region - compare-container -->	
		<div id="compare-container" class="draggable-container hidden">
			<div id="compare-container-drag-area" class="draggable-area drag-area">
				Click this bar/header to drag around!
				<div class="right">
					<a title="Click to Close Comparison" href="javascript:toggleDiv('compare-container');">
						 <img class="icons icons1 x-icon" src="images/icons/menu/x-button.webp" alt="X" />
					</a>
				</div>
			</div>


			<!-- #region - Compare Boxes -->
				<div id="compare-boxes-container" class="rows-compare">
				
					<div id="compare-boxes">

						<!-- #region - Column 1 -->					
						<div id="compare1" class="columns" ondrop="drop(event)" ondragover="allowDrop(event)">
						
						
						
						</div>
						<!-- #endregion - Column 1-->						

						<!-- #region - Column 2 -->	
						<div id="compare2" class="columns" ondrop="drop(event)" ondragover="allowDrop(event)">
						
						
						</div>
						<!-- #endregion - Column 2 -->		

					</div>	

				</div>
			<!-- #endregion - Compare Boxes -->

		</div>
	<!-- #endregion - compare-container -->


	<!-- #region - bdo-recipes-container -->
		<div id="bdo-recipes-container">

		<!-- #region - recipes-alchemy -->				
			<div id="recipes-alchemy" class="">

				<div id="compare-link-button" class="compare-link">
					<a title="Click to Open Comparison" href="javascript:toggleDiv('compare-container');">
						Compare <img class="icons icons1 compare-icon" src="images/icons/menu/compare.webp" alt="Icon" /> 
					</a>
				</div>

				<div id="recipes-alchemy-content" class="recipes-container">

					<!-- #region - Columns Left -->
						<div id="columns-Alchemy-left" class="rows rows-left">

							<!-- #region - Column 1 - Left -->					
							<div id="recipes1-Alchemy-left" class="columns" ondrop="drop(event)" ondragover="allowDrop(event)">

							<?php include("blood-group-1.php");?>

							
							</div>
							<!-- #endregion - Column 1 - Left -->
			
							<!-- #region - Column 2 Left -->						
							<div id="recipes2-Alchemy-left" class="columns" ondrop="drop(event)" ondragover="allowDrop(event)">
		
						

							
							</div>
							<!-- #endregion - Column 2 Left -->	
							
						</div>
					<!-- #endregion - Columns Left -->
					
					<!-- #region - Columns Right -->
						<div id="columns-Alchemy-right" class="rows rows-right">

							<!-- #region - Column 1 - Right -->					
							<div id="materials1-Alchemy-right" class="columns" ondrop="drop(event)" ondragover="allowDrop(event)">
							
							







































							
							</div>
							<!-- #endregion - Column 1 - Right -->						

							<!-- #region - Column 2 - Right -->							
							<div id="materials2-Alchemy-right" class="columns" ondrop="drop(event)" ondragover="allowDrop(event)">
							
							
							</div>
							<!-- #endregion - Column 2 - Right -->					

						</div>
					<!-- #endregion - Compare Boxes Right -->

				</div>

			</div>
		<!-- #endregion - recipes-alchemy -->	

		<!-- #region - recipes-cooking -->		
			<div id="recipes-cooking" class="hidden">

				<div id="compare-link-button2" class="compare-link">
					<a title="Click to Open Comparison" href="javascript:toggleDiv('compare-container');">
						Compare <img class="icons icons1 compare-icon" src="images/icons/menu/compare.webp" alt="Icon" /> 
					</a>
				</div>			

			</div>
		<!-- #endregion - recipes-cooking-->

		</div>
	<!-- #endregion - bdo-recipes-container -->
<!-- 
	<script>
		//Make the DIV element draggagle:
		dragElement(document.getElementById("compare-container"));

		function dragElement(elmnt) {
		var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
		if (document.getElementById(elmnt.id + "-dragarea")) {
			/* if present, the header is where you move the DIV from:*/
			document.getElementById(elmnt.id + "-dragarea").onmousedown = dragMouseDown;
		} else {
			/* otherwise, move the DIV from anywhere inside the DIV:*/
			elmnt.onmousedown = dragMouseDown;
		}

		function dragMouseDown(e) {
			e = e || window.event;
			e.preventDefault();
			// get the mouse cursor position at startup:
			pos3 = e.clientX;
			pos4 = e.clientY;
			document.onmouseup = closeDragElement;
			// call a function whenever the cursor moves:
			document.onmousemove = elementDrag;
		}

		function elementDrag(e) {
			e = e || window.event;
			e.preventDefault();
			// calculate the new cursor position:
			pos1 = pos3 - e.clientX;
			pos2 = pos4 - e.clientY;
			pos3 = e.clientX;
			pos4 = e.clientY;
			// set the element's new position:
			elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
			elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
		}

		function closeDragElement() {
			/* stop moving when mouse button is released:*/
			document.onmouseup = null;
			document.onmousemove = null;
		}
		}
	</script> -->

	<!-- <script>
		//Make the DIV element draggagle:
		dragElement(document.getElementsByClassName("draggable-container"));

		function dragElement(elmnt) {
		var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
		if (document.getElementById(elmnt.id + "-dragarea")) {
			/* if present, the header is where you move the DIV from:*/
			document.getElementById(elmnt.id + "-dragarea").onmousedown = dragMouseDown;
		} else {
			/* otherwise, move the DIV from anywhere inside the DIV:*/
			elmnt.onmousedown = dragMouseDown;
		}

		function dragMouseDown(e) {
			e = e || window.event;
			e.preventDefault();
			// get the mouse cursor position at startup:
			pos3 = e.clientX;
			pos4 = e.clientY;
			document.onmouseup = closeDragElement;
			// call a function whenever the cursor moves:
			document.onmousemove = elementDrag;
		}

		function elementDrag(e) {
			e = e || window.event;
			e.preventDefault();
			// calculate the new cursor position:
			pos1 = pos3 - e.clientX;
			pos2 = pos4 - e.clientY;
			pos3 = e.clientX;
			pos4 = e.clientY;
			// set the element's new position:
			elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
			elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
		}

		function closeDragElement() {
			/* stop moving when mouse button is released:*/
			document.onmouseup = null;
			document.onmousemove = null;
		}
		}
	</script> -->


	<script>
		var draggableElements = document.getElementsByClassName("drag-area");

		for(var i = 0; i < draggableElements.length; i++){
			dragElement(draggableElements[i]);
		}

		function dragElement(elmnt) {
			var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
			if (document.getElementsByClassName("drag-area")) {
				elmnt.onmousedown = dragMouseDown;  
			} else {
					elmnt.onmousedown = dragMouseDown;
			}
			function dragMouseDown(e) {
				e = e || window.event;
				pos3 = parseInt(e.clientX);
				pos4 = parseInt(e.clientY);
				document.onmouseup = closeDragElement;
				document.onmousemove = elementDrag;
				return false;
			}

			function elementDrag(e) {
				e = e || window.event;
				pos1 = pos3 - parseInt(e.clientX);
				pos2 = pos4 - parseInt(e.clientY);
				pos3 = parseInt(e.clientX);
				pos4 = parseInt(e.clientY);
				elmnt.parentNode.style.top = (elmnt.parentNode.offsetTop - pos2) + "px";
				elmnt.parentNode.style.left = (elmnt.parentNode.offsetLeft - pos1) + "px";
			}

			function closeDragElement() {
				document.onmouseup = null;
				document.onmousemove = null;
			}
		}
	</script>
</body>
</html>