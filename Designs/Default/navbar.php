<?php
require_once('./Configs/Pages.config.php');

foreach($PAG3R_PAGES as $page){
						
					$parts = explode(':', $page);
					
					if (strpos($_GET['p'], $parts[1])!== false){
						echo ' <li class="active">';
					}else{
					echo '<li>';
					}
					echo '<a href="./index.php?p=' . $parts[1] . '"><i class="' . $parts[2] . '"></i> ' . $parts[0] . '</a>  </li>';
					}

?>