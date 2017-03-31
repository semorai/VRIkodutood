<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<style type="text/css">
		  div{
			border: 2px solid lightblue;
			border-radius: 10px;
			font-size: 20px;
			margin: 10px;
			padding: 5px;
			width:fit-content;
		  }
		</style>
	</head>
	<body>
	<?php 
		$kassid= array( 
			array('nimi'=>'Sofia', 'vanus'=>4, 'värvus'=>'kollane', 'tõug'=>'Siiami kass', 'tegevus' => ',kellele meeldib asju ümber ajada', 'omanik'=>'Tuuli' ), 
			array('nimi'=>'Peeter', 'vanus'=>2, 'värvus'=>'must', 'tõug'=>'Burma kass', 'tegevus' => ', kellele ei meeldi läikivad mänguasjad', 'omanik'=>'Meelis'),
			array('nimi'=>'Tom ', 'vanus'=>6, 'värvus'=>'hall', 'tõug'=>'Norra metskass', 'tegevus' => ', kellele on väga raske sobivat toitu leida','omanik'=>'Marko'),
			array('nimi'=>'Muira', 'vanus'=>8, 'värvus'=>'laiguline', 'tõug'=>'Pärsia kass', 'tegevus' => ', kellele meeldivad lapsed', 'omanik'=>'Urmas'),
			array('nimi'=>'Nurr ', 'vanus'=>1, 'värvus'=>'mustvalge', 'tõug'=>'Vene sinine kass', 'tegevus' => ', kellele ei tasu lähedale minna', 'omanik'=>'Katre')
		);
		
		foreach ($kassid as $miisu){
			include("Miisu.html");
		}
	?>
	</body>
</html>