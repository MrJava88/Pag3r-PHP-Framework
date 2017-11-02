![pag3r framework](https://user-images.githubusercontent.com/20287964/28875703-c4e38f6c-7796-11e7-9008-323905fbfb76.png)

# Pag3r PHP Framework

Small and easy to use open source PHP Framework.

Thes Pag3r PHP Framework is made with experienced and also inexperienced developers in mind, you can easily and quickly create, design and manage your website.

# Why use Pag3r?

- Simple and easy use
- Open source
- Import Designs with 1 click or create your own
- Plugin System
- Admin CMS (Work In Progress)

# Downloads & Releases

- [x] Latest Release: https://github.com/MrJava88/Pag3r-PHP-Framework/releases/latest

- [x] Release V 1.1: https://github.com/MrJava88/Pag3r-PHP-Framework/releases/tag/v1.1

# How to Register & Add New Pages?

Within the ``/Configs/Pages.config.php``, you can add your pages to the ``$PAG3R_PAGES`` array:

```PHP
$PAG3R_PAGES = array(
"Page Name"=>"Page Name:filename.php:icon-chevron-right",
"Page Name2"=>"Page Name2:filename2.php:icon-chevron-right",
"Page Name3"=>"Page Name3:filename3.php:icon-chevron-right"
);
```

Now navigate to ``/Pages/`` and create your new file, e.g. ``filename.php``, which stands for "Page Name", because we've just added to the array.

# How to Edit or Change the Navbar?

If you like, you can easily edit the navigation bar, where the pages are displayed. In order to do so, create a new folder, e.g. `YOURDESIGN` in ``/Designs/`` and then edit the ``/Designs/YOURDESIGN/navbar.php``. If you are using the default design, the path is ``/Designs/Default/navbar.php``. The default ``navbar.php`` source code is as follows:

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

# How to Protect the Files?

If you want to protect a file from directly accessing, just add to the top of the file this code:

```PHP
if(!defined('Pag3r-Framework')) {
   die('[Pag3r Framework] >> Direct access not permitted');
}
```

# How to Create My Own Plugin?

Go to the ``/Plugins/`` folder and create a new directory , e.g. ``/YOURPLUGIN/``. Then navigate in to the ``/Plugins/YOURPLUGIN/`` directory and create the file ``Plugin.pag3r.php``. This will be your main plugin class, where you write your code, for example:

```PHP
function YOURPLUGIN_generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
```

In order to avoid conflicts, please prefix your function name with the name of your Plugin, like in this example. Now you can use your new function from everywhere; Just call ``YOURPLUGIN_generateRandomString();``.

# Updates

I will go and add an Admin CMS soon, the PluginIncluder is now working.
