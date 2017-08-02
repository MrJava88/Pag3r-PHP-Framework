<?php
//Example API / Plugin

function PAG3R_Redirect($url, $permanent = false){
	echo '[Pag3r Framework] >> Redirect to ' . $url . ' ...';
    header('Location: ' . $url, true, $permanent ? 301 : 302);
	exit();
}




?>