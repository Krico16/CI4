<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-11-28 00:11:04 --> Call to undefined function form_open()
#0 C:\Users\Desktop\Documents\GitHub\CI4\system\View\View.php(236): include()
#1 C:\Users\Desktop\Documents\GitHub\CI4\system\Common.php(176): CodeIgniter\View\View->render('login', Array, NULL)
#2 C:\Users\Desktop\Documents\GitHub\CI4\app\Controllers\Home.php(13): view('login')
#3 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(847): App\Controllers\Home->login()
#4 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Desktop\Documents\GitHub\CI4\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-28 00:13:20 --> Call to undefined function form_open()
#0 C:\Users\Desktop\Documents\GitHub\CI4\system\View\View.php(236): include()
#1 C:\Users\Desktop\Documents\GitHub\CI4\system\Common.php(176): CodeIgniter\View\View->render('login', Array, NULL)
#2 C:\Users\Desktop\Documents\GitHub\CI4\app\Controllers\Home.php(14): view('login')
#3 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(847): App\Controllers\Home->login()
#4 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Desktop\Documents\GitHub\CI4\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
