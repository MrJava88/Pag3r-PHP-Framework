<?php

function PAG3R_Redirect($url, $permanent = false){
	echo '[Pag3r Framework] >> Redirect to ' . $url . ' ...';
    header('Location: ' . $url, true, $permanent ? 301 : 302);
	exit();
}


#Pag3r Framework
require_once('./Configs/Framework.config.php');
require_once('./Designs/' . $page_design . 'headstyle.php');

if(!(isset($_GET['p']))){
PAG3R_Redirect('./index.php?p=index.php',TRUE);	
}else{
require_once('./Pages/' . $_GET['p']);	
}



require_once('./Designs/' . $page_design . 'foodstyle.php');
?>