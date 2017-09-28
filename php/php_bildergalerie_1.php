<div id="wrapper-bildergalerie">
	<ul id="bildergalerie">	
	<?php
		$ordner = "../img/lightbox"; //Hier den Namen des Bilderordners eintragen
		$allebilder = scandir($ordner);
		$slidernummer = 1;
		
		foreach ($allebilder as $bild) {
			$bildinfo = pathinfo($ordner."/".$bild);
			$size = ceil(filesize($ordner."/".$bild)/1024);
			
			if ($bild != "." && $bild != ".." && $bild != "_notes" && $bildinfo['basename'] != "Thumbs.db") {
				?>	
				<li>
					<a href="<?php echo ($bildinfo['dirname']."/".$bildinfo['basename']); ?>" data-lightbox="show-1" title="<?php echo($bildinfo['filename']); ?>">
						<img src="<?php echo ($bildinfo['dirname']."/".$bildinfo['basename']); ?>"/>
					</a>
				</li>
			<?php
			};
		};
		?>
	</ul>
</div>