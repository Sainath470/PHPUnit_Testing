# PHPUNIT TESTING PRACTISE

Steps to do php unit testing
step 1 : download the composer and install it  from https://getcomposer.org/  
step 2 : Open the command prompt and type composer and list of commands appears then only it is installed.
step 2 : In command prompt create a directory(folder) and go inside the directory 
step 3: Now type the command --> composer require --dev phpunit/phpunit 
step 4: Running PHPUnit and adding an alias (macOS, Linux)
         ---> ./vendor/phpunit/phpunit/phpunit
         --->  alias phpunit="./vendor/phpunit/phpunit/phpunit"
         
        Running PHPUnit and adding a shortcut (Windows)
        ----> php vendor\phpunit\phpunit\phpunit
        ----> echo @php "%~dp0vendor\phpunit\phpunit\phpunit" %* > phpunit.cmd
