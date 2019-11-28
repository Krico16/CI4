<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-11-27 23:46:40 --> Invalid file: log.php
#0 C:\Users\Desktop\Documents\GitHub\CI4\system\View\View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('log.php')
#1 C:\Users\Desktop\Documents\GitHub\CI4\system\Common.php(176): CodeIgniter\View\View->render('log', Array, NULL)
#2 C:\Users\Desktop\Documents\GitHub\CI4\app\Controllers\UserAuth.php(19): view('log')
#3 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(847): App\Controllers\UserAuth->index()
#4 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserAuth))
#5 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Desktop\Documents\GitHub\CI4\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-27 23:47:00 --> Call to undefined function form_open()
#0 C:\Users\Desktop\Documents\GitHub\CI4\system\View\View.php(236): include()
#1 C:\Users\Desktop\Documents\GitHub\CI4\system\Common.php(176): CodeIgniter\View\View->render('login', Array, NULL)
#2 C:\Users\Desktop\Documents\GitHub\CI4\app\Controllers\UserAuth.php(19): view('login')
#3 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(847): App\Controllers\UserAuth->index()
#4 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserAuth))
#5 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Desktop\Documents\GitHub\CI4\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-11-27 23:59:20 --> Call to undefined function form_open()
#0 C:\Users\Desktop\Documents\GitHub\CI4\system\View\View.php(236): include()
#1 C:\Users\Desktop\Documents\GitHub\CI4\system\Common.php(176): CodeIgniter\View\View->render('login', Array, NULL)
#2 C:\Users\Desktop\Documents\GitHub\CI4\app\Controllers\UserAuth.php(19): view('login')
#3 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(847): App\Controllers\UserAuth->index()
#4 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserAuth))
#5 C:\Users\Desktop\Documents\GitHub\CI4\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Desktop\Documents\GitHub\CI4\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
