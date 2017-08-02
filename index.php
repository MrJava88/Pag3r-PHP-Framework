<?php

#Pag3r Framework
require_once('./Configs/Framework.config.php');
require_once('./Plugins/PluginIncluder.php');

PAG3R_IncludePlugins('./Plugins/', false); #PluginFoulder, Debuglog

require_once('./Designs/' . $page_design . 'headstyle.php');

if(!(isset($_GET['p']))){
PAG3R_Redirect('./index.php?p=index.php',TRUE);	
}else{
require_once('./Pages/' . $_GET['p']);	
}

require_once('./Designs/' . $page_design . 'foodstyle.php');
?>