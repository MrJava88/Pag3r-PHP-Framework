<?php
require_once('./Configs/Framework.config.php');

?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title><?php echo $page_title; ?></title>
		
        <link href="./Plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="./Plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo './Designs/' . $page_design; ?>vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo './Designs/' . $page_design; ?>assets/styles.css" rel="stylesheet" media="screen">
		<link href="<?php echo './Designs/' . $page_design; ?>assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <script src="<?php echo './Designs/' . $page_design; ?>vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="./index.php"><?php echo $page_name; ?>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                           
                        </ul>
                    
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
					
					<?php
					
					require_once('./Designs/' . $page_design . 'navbar.php');
									
					?>
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
	
                       
                    	</div>