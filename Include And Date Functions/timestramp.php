

		<?php
			
			echo"<h1>Timestramp Function</h1>";
			echo"<h3>Example One</h3>";
			$d=mktime(0,0,0,date('m'),date('d'),date('y'));
			//echo"<h3>$d</h3>";
			echo date("D/M/Y",$d);
			echo"<h3>Example Two </h3>";
			$d=mktime(0,0,0,date('m'),date('d')+1,date('y'));	//here by +1 in day it will display next day
			//echo"<h3>$d</h3>";
			echo date("D/M/Y",$d);
						



		?>