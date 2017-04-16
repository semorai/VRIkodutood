<?php 
require_once('head.html'); 
$pildid = array(
	array("source"=>"pildid/nameless1.jpg", "alt"=>"nimetu 1"),
	array("source"=>"pildid/nameless2.jpg", "alt"=>"nimetu 2"),
	array("source"=>"pildid/nameless3.jpg", "alt"=>"nimetu 3"),
	array("source"=>"pildid/nameless4.jpg", "alt"=>"nimetu 4"),
	array("source"=>"pildid/nameless5.jpg", "alt"=>"nimetu 5"),
	array("source"=>"pildid/nameless6.jpg", "alt"=>"nimetu 6"),
);
if (isset($_GET["pilt"])){
	if($_GET["pilt"]>0 AND $_GET["pilt"]<count($pildid)+1){
		$result="Hääl arvestatud!";
	} else {
		$result="Pilti ei eksisteeri!";
	} 
} else {
	$result="Ei hääletatud!";
}
?>
	<h3>Valiku tulemus</h3>
	<p><?php echo($result) ?></p>
<?php require_once('foot.html'); ?>