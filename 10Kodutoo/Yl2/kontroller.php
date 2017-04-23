<?php
session_start();
$pildid = array(
	array("source"=>"pildid/nameless1.jpg", "alt"=>"nimetu 1"),
	array("source"=>"pildid/nameless2.jpg", "alt"=>"nimetu 2"),
	array("source"=>"pildid/nameless3.jpg", "alt"=>"nimetu 3"),
	array("source"=>"pildid/nameless4.jpg", "alt"=>"nimetu 4"),
	array("source"=>"pildid/nameless5.jpg", "alt"=>"nimetu 5"),
	array("source"=>"pildid/nameless6.jpg", "alt"=>"nimetu 6"),
);
$page="";
if (isset($_GET['page'])){
	$page = $_GET['page'];
}
require_once('head.html');
switch($page){
	case 'galerii':
		include('galerii.html');
		break;
	case 'vote':
		if (isset($_SESSION['voted_for'])){
			header('Location: ?page=tulemus');
		} else {
			include('vote.html');
		}
		break;
	case 'tulemus':
		include('tulemus.html');
		break;
	case 'logout':
		//lõpeta sessioon
		$_SESSION = array();
		if (isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', time()-42000, '/');
		}
		session_destroy();
		header('Location: ?page=pealeht');
		break;
	default:
		include('pealeht.html');
}
require_once('foot.html');
?>