<?php

	//RSS FEED Martins Videos
	function  YT_video(){
		$html = '';
		//RSS feed Link RPGTEAMX Kanal
		$url = "https://www.youtube.com/feeds/videos.xml?channel_id=UCf15ZON61Cgu6F3kw1Q22LA";
		//RSS FEED in XML laden
	    $xml = simplexml_load_file($url);
		for ($i=0; $i < 2; $i++) {
			//Id der aktuellsten Videos
			$id = $xml->entry[$i]->id;
			$id = substr($id, strpos($id, ":")+7);
			$title = $xml->entry[$i]->title;
			//Titel kürzen falls  zu lang
			if (strlen($title)> 50) {
	            $title = substr($title, 0, 80). '...';
	        }
			//HTML generieren
			$html .= "<div class='YTVideo'>
						<h3 style='margin-bottom:30px'><u><b>$title</b></u></h3>
						<div class='embed-responsive embed-responsive-16by9'>
		    			<iframe class='embed-responsive-item' src='https://www.youtube.com/embed/$id'></iframe>
		    			</div>
		    		</div>";
		    if ($i<1) {
		    	$html .= "<hr class='YThr'>";
		    }
		}
		#HTML ausgeben
		echo $html;
	}

	/*Generiert img-Tags je nach Anzahl der Vorhandenen Bilder im img/Lightbox ordner*/
	function Pictures_1()
	{
		$fi = new FilesystemIterator('../img/LightBox', FilesystemIterator::SKIP_DOTS);
		$x = iterator_count($fi)-4;
		$html_p = "";

		for ($i=1; $i < $x+1; $i++) {
			$html_p .= "<div class='column'>
			<img src='../img/LightBox/img$i.jpg' style='width:100%' onclick='openModal();currentSlide($i)' class='hover-shadow cursor'>
			</div>";
		}
		echo $html_p;
	}

	//Wird für das Vergroeßern der Bilder benötigt
	function Pictures_2()
	{
		$fi = new FilesystemIterator('../img/LightBox', FilesystemIterator::SKIP_DOTS);
		$x = iterator_count($fi)-4;
		$html_p = "";

		for ($i=1; $i < $x+1 ; $i++) {
			$html_p .= "<div class='mySlides'>
			      <div class='numbertext'>$i / $x</div>
			      <img src='../img/LightBox/img$i.jpg' style='width:100%'>
			    </div>";
		}
		echo $html_p;
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Galerie | NTF</title>
	    <?php include '../essentials/head.php' ?>
	    <link rel="stylesheet" href="../css/LightBox/lightbox.css">
	    <link rel="stylesheet" href="../css/LightBox/LightBoxModal.css">
	    <link rel="stylesheet" href="../css/bildergalerie.css">
	</head>

	<body>
	    <!-- Navigations leiste importieren-->
	    <?php include("../essentials/navbar.php");?>
		<br>
	    <div class="container">
			<div class="well well-sm panelHead PanelHeading">
	    		<h2>Hier ein paar Eindrücke aus unseren Missionen</h2>
			</div>
			<div class="well well-sm panelBody" id="picBody" >
	        	<?php include ("../php/php_bildergalerie_1.php"); ?>
			</div>
	        <br>
			<div class="well well-sm panelHead">
	        	<h2 class="PanelHeading">Unsere Videos</h2>
			</div><!-- YT Panel Head -->
	      	<div class="well well-sm panelBody">
	        	<?php
	        		//Funktion aufrufen
	            	YT_video();
        		?>
	    	</div><!-- YT PanelBody -->
	    	<?php include '../essentials/footer.php' ?>
		</div><!-- container -->

		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

	    <script src="../js/lightbox.js"></script>
	    <script src="../js/slideShow.js"></script>
	</body>
</html>
