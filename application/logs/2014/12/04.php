<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-04 22:21:58 --- CRITICAL: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'ecommerce'@'localhost' (using password: YES) ~ APPPATH\classes\Helper\database.php [ 15 ] in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15
2014-12-04 22:21:58 --- DEBUG: #0 C:\wamp2\www\eCommerce\application\classes\Helper\database.php(15): PDO->__construct('mysql:host=loca...', 'ecommerce', 'ecommerce')
#1 C:\wamp2\www\eCommerce\application\classes\Model\Product.php(8): Helper_database->__construct()
#2 C:\wamp2\www\eCommerce\application\classes\Controller\Product.php(60): Model_Product->__construct()
#3 C:\wamp2\www\eCommerce\system\classes\Kohana\Controller.php(84): Controller_Product->action_getProducts()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp2\www\eCommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp2\www\eCommerce\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15
2014-12-04 22:23:50 --- CRITICAL: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'ecommerce'@'localhost' (using password: YES) ~ APPPATH\classes\Helper\database.php [ 15 ] in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15
2014-12-04 22:23:50 --- DEBUG: #0 C:\wamp2\www\eCommerce\application\classes\Helper\database.php(15): PDO->__construct('mysql:host=loca...', 'ecommerce', 'ecommerce')
#1 C:\wamp2\www\eCommerce\application\classes\Model\Product.php(8): Helper_database->__construct()
#2 C:\wamp2\www\eCommerce\application\classes\Controller\Product.php(60): Model_Product->__construct()
#3 C:\wamp2\www\eCommerce\system\classes\Kohana\Controller.php(84): Controller_Product->action_getProducts()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp2\www\eCommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp2\www\eCommerce\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15
2014-12-04 22:30:24 --- CRITICAL: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'ecommerce'@'localhost' (using password: YES) ~ APPPATH\classes\Helper\database.php [ 15 ] in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15
2014-12-04 22:30:24 --- DEBUG: #0 C:\wamp2\www\eCommerce\application\classes\Helper\database.php(15): PDO->__construct('mysql:host=loca...', 'ecommerce', 'ecommerce')
#1 C:\wamp2\www\eCommerce\application\classes\Model\Product.php(8): Helper_database->__construct()
#2 C:\wamp2\www\eCommerce\application\classes\Controller\Product.php(60): Model_Product->__construct()
#3 C:\wamp2\www\eCommerce\system\classes\Kohana\Controller.php(84): Controller_Product->action_getProducts()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp2\www\eCommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp2\www\eCommerce\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15
2014-12-04 22:35:29 --- CRITICAL: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'ecommerce'@'localhost' (using password: YES) ~ APPPATH\classes\Helper\database.php [ 15 ] in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15
2014-12-04 22:35:29 --- DEBUG: #0 C:\wamp2\www\eCommerce\application\classes\Helper\database.php(15): PDO->__construct('mysql:host=loca...', 'ecommerce', 'ecommerce')
#1 C:\wamp2\www\eCommerce\application\classes\Model\Product.php(8): Helper_database->__construct()
#2 C:\wamp2\www\eCommerce\application\classes\Controller\Product.php(60): Model_Product->__construct()
#3 C:\wamp2\www\eCommerce\system\classes\Kohana\Controller.php(84): Controller_Product->action_getProducts()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp2\www\eCommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp2\www\eCommerce\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15
2014-12-04 22:37:34 --- CRITICAL: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'eCommerce'@'localhost' (using password: YES) ~ APPPATH\classes\Helper\database.php [ 15 ] in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15
2014-12-04 22:37:34 --- DEBUG: #0 C:\wamp2\www\eCommerce\application\classes\Helper\database.php(15): PDO->__construct('mysql:host=loca...', 'eCommerce', 'eCommerce')
#1 C:\wamp2\www\eCommerce\application\classes\Model\Product.php(8): Helper_database->__construct()
#2 C:\wamp2\www\eCommerce\application\classes\Controller\Product.php(60): Model_Product->__construct()
#3 C:\wamp2\www\eCommerce\system\classes\Kohana\Controller.php(84): Controller_Product->action_getProducts()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp2\www\eCommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp2\www\eCommerce\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15
2014-12-04 22:37:49 --- CRITICAL: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'eCommerce'@'localhost' (using password: YES) ~ APPPATH\classes\Helper\database.php [ 15 ] in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15
2014-12-04 22:37:49 --- DEBUG: #0 C:\wamp2\www\eCommerce\application\classes\Helper\database.php(15): PDO->__construct('mysql:host=loca...', 'eCommerce', 'eCommerce')
#1 C:\wamp2\www\eCommerce\application\classes\Model\Product.php(8): Helper_database->__construct()
#2 C:\wamp2\www\eCommerce\application\classes\Controller\Product.php(60): Model_Product->__construct()
#3 C:\wamp2\www\eCommerce\system\classes\Kohana\Controller.php(84): Controller_Product->action_getProducts()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp2\www\eCommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp2\www\eCommerce\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp2\www\eCommerce\application\classes\Helper\database.php:15