# Pag3r-PHP-Framework

Small and easy to use open source PHP Framework.
This Framework is for experienced and also inexperienced developer, you can easy create and design your website, also manage and work faster.

# Why use Pag3r?

<p>Simple and easy use</p>
<p>Open source</p>
<p>Import Designs with 1 click or create your own</p>

<b>... and much more</b>

# How to register & add new Pages?

First navigate to ``/Configs/Pages.config.php`` add to the ``$PAG3R_PAGES`` Array your new page like this 
```PHP
$PAG3R_PAGES = array("Page Name"=>"Page Name:filename.php:icon-chevron-right");
```
if you want to add more pages just do it like this 
```PHP
$PAG3R_PAGES = array(
"Page Name"=>"Page Name:filename.php:icon-chevron-right",
"Page Name2"=>"Page Name2:filename2.php:icon-chevron-right",
"Page Name3"=>"Page Name3:filename3.php:icon-chevron-right"
);
```
Now navigate to ``/Pages/`` and create your new file for example ``filename.php`` stands in our example for "Page Name", we had added before.

# How to edit or change the "navbar" ?

If you like you can easy edit the navigationbar where the pages are displayed, for that just go to ``/Designs/*YOUR DESIGN*/navbar.php`` if you are using the Default design the path is ``/Designs/Default/navbar.php``, the Default ``navbar.php`` source code is
```PHP
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
```

# Configurate the Framework

Just jump to ``/Configs/Framework.config.php`` there you can change the required settings to run the Pag3r´s Framework correctly.


# How to protect files?

If you want to protect a file from directly accessing, just add to the top of the file this code
```PHP
if(!defined('Pag3r-Framework')) {
   die('[Pag3r Framework] >> Direct access not permitted');
}
```

# Updates

I will go and add an Admin CMS soon, the PluginIncluder is currently not finished and i will work on this next. This Framework is for Experienced and also inexperienced programmers, you can easy create and design your Website, also manage and work faster.
