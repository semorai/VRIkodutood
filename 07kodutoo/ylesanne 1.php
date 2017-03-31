<?php
$muutuja = "kolm on suurem kui kaheksa";
$pikkus = strlen($muutuja);
for ($i = 0; $i<$pikkus; $i++) {
	$nr = $pikkus-$i-1;
	echo($muutuja[$nr]);
}
?>