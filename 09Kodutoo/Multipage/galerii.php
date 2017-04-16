<?php require_once('head.html'); ?>
	<h3>Fotod</h3>
	<div id="gallery">
		<?php 		 
		$pildid = array(
			array("source"=>"pildid/nameless1.jpg", "alt"=>"nimetu 1"),
			array("source"=>"pildid/nameless2.jpg", "alt"=>"nimetu 2"),
			array("source"=>"pildid/nameless3.jpg", "alt"=>"nimetu 3"),
			array("source"=>"pildid/nameless4.jpg", "alt"=>"nimetu 4"),
			array("source"=>"pildid/nameless5.jpg", "alt"=>"nimetu 5"),
			array("source"=>"pildid/nameless6.jpg", "alt"=>"nimetu 6"),
		);
		foreach($pildid as $pilt){
			echo("<img src='".$pilt["source"]."' alt='' />");
		}
		?>
	</div>
<?php require_once('foot.html'); ?>