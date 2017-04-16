<?php require_once('head.html'); ?>
	<h3>Vali oma lemmik :)</h3>
	<form action="tulemus.php" method="GET">
		<?php 		 
		$pildid = array(
			array("source"=>"pildid/nameless1.jpg", "alt"=>"nimetu 1"),
			array("source"=>"pildid/nameless2.jpg", "alt"=>"nimetu 2"),
			array("source"=>"pildid/nameless3.jpg", "alt"=>"nimetu 3"),
			array("source"=>"pildid/nameless4.jpg", "alt"=>"nimetu 4"),
			array("source"=>"pildid/nameless5.jpg", "alt"=>"nimetu 5"),
			array("source"=>"pildid/nameless6.jpg", "alt"=>"nimetu 6"),
		);
		
		for ($i=0; $i<count($pildid); $i++){
			$j = $i + 1;
			echo('<p>');
			echo('<label for="p'.$j.'">');
			echo('<img src="'.$pildid[$i]["source"].'" 
				alt="'.$pildid[$i]["alt"].'" height="100" />');
			echo('</label>');
			echo('<input type="radio" value="'.$j.'" id="p'.$j.'" name="pilt"/>');
			echo('</p>');
		}
		?>
		<br/>
		<input type="submit" value="Valin!"/>
		
	</form>
<?php require_once('foot.html'); ?>