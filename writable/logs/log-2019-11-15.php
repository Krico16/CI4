<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-11-15 17:21:29 --> Call to undefined function CodeIgniter\CLI\mb_strpos()
#0 D:\Servers\Igniter\system\CLI\CLI.php(166): CodeIgniter\CLI\CLI::parseCommandLine()
#1 D:\Servers\Igniter\system\CLI\CLI.php(969): CodeIgniter\CLI\CLI::init()
#2 D:\Servers\Igniter\system\Autoloader\Autoloader.php(365): require_once('D:\\Servers\\Igni...')
#3 D:\Servers\Igniter\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('D:\\Servers\\Igni...')
#4 D:\Servers\Igniter\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('CodeIgniter\\CLI...')
#5 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('CodeIgniter\\CLI...')
#6 D:\Servers\Igniter\system\CLI\Console.php(96): spl_autoload_call('CodeIgniter\\CLI...')
#7 D:\Servers\Igniter\spark(54): CodeIgniter\CLI\Console->showHeader()
#8 {main}
