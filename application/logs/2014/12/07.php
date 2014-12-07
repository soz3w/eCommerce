<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-07 07:26:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Product.php [ 28 ] in file:line
2014-12-07 07:26:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-07 14:28:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tem_per_page ~ APPPATH\classes\Controller\Product.php [ 35 ] in C:\wamp2\www\eCommerce\application\classes\Controller\Product.php:35
2014-12-07 14:28:20 --- DEBUG: #0 C:\wamp2\www\eCommerce\application\classes\Controller\Product.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp2\\www\\eC...', 35, Array)
#1 C:\wamp2\www\eCommerce\system\classes\Kohana\Controller.php(84): Controller_Product->action_getProducts()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp2\www\eCommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp2\www\eCommerce\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp2\www\eCommerce\application\classes\Controller\Product.php:35