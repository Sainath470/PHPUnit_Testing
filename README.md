# PHPUNIT TESTING PRACTISE

Steps to do php unit testing
* download the composer and install it  from https://getcomposer.org/  
* Open the command prompt and type composer and list of commands appears then only it is installed.
* In command prompt create a directory(folder) and go inside the directory 
* Now type the command --> composer require --dev phpunit/phpunit 
* Running PHPUnit and adding an alias (macOS, Linux)
         ---> ./vendor/phpunit/phpunit/phpunit
         --->  alias phpunit="./vendor/phpunit/phpunit/phpunit"
         
 * Running PHPUnit and adding a shortcut (Windows)
        ----> php vendor\phpunit\phpunit\phpunit
        ----> echo @php "%~dp0vendor\phpunit\phpunit\phpunit" %* > phpunit.cmd
