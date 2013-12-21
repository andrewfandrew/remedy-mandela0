remedy-mandela
==============

This repo contains the original wordpress installation for Remedy Partnership.

The version seems to be Wordpress 3.1. The current latest version of Wordpress is 3.8.
- There is a requirement by the client to upgrade the wordpress installation
- This need is driven by the version 4 of PHP running in the hosting environment at 1&1.
- Soon PHP 4 will be unavailable at 1&1. The site would then go down.
- So the PHP needs to be switched to version 5. The site probably needs to be upgraded to
- work with PHP 5. Upgrading the site e.g. to Wordpress 3.8 means upgrading the plugins and the 
- simple organization theme in use. 

- A test site has been created using Dataflame hosting environment. It is PHP 5.4 and Wordpress 3.8.
- The WP site was created from scratch using the Cpanel automated method. The data from the 'production'
- site was then imported into the test site. The latest plugins were installed and the latest theme version.

- The theme is not displaying correctly and it seems that the menu position has been changed in the latest version.
- Other aspects of the layout seem to have been changed. The main problem is the home page.
- There is a need to create the homepage by a different method, possible a home.php template file.

