<?php
function PAG3R_IncludePlugins($dir = './Plugins/',$debuglog = false) {
	$log = "Called ( PAG3R_IncludePlugins() )<br>";
	
    if (isset($dir) && is_readable($dir)) { 
        $directionList = Array(); 
         
        $dir = realpath($dir);
         
            $objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir,FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST); 

        $x = 0; 
		$x2 = 0; 
        foreach($objects as $entry => $object){     
            $getpath = str_replace($dir, '', $entry); 
            $size = ceil($object->getSize()/1024); 
            $changed = date($object->getMTime());
			$name = $object->getFilename();
            
			$log = $log . 'getpath: ' . $getpath . '<br>';
			$log = $log . 'Size: ' . $size . '<br>';
			$log = $log . 'changed: ' . $changed . '<br>';
			$log = $log . 'name: ' . $name . '<br><br>';
			
			if($name == 'Plugin.pag3r.php'){
				
				$log = $log . '<font color="green">Plugin Found ( ' . $name . ' )</font><br>';
				$log = $log . 'Try to Require Plugin: ' . $name . '...<br>';
				require_once('./Plugins/' . $getpath);
				$log = $log . 'Looks done! <br><br>';
				$x ++;
			}
			
		
         $x2 ++;
        } 
         
	if($debuglog){
		$log = $log . 'Writing Log: debuglog.php, Plugins Required: '.$x.' of '. $x2.' Files!<br>';
		$handle = fopen ("./Plugins/" . "debuglog.php", "w");
		fwrite ($handle, $log);
		fclose ($handle);
	}
    } 
} 

 

?>