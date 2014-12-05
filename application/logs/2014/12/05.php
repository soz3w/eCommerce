<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-05 09:42:22 --- EMERGENCY: PDOException [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'eCommerce'@'localhost' (using password: YES) ~ APPPATH/classes/Helper/database.php [ 15 ] in /home/wap23/sites/eCommerce/application/classes/Helper/database.php:15
2014-12-05 09:42:22 --- DEBUG: #0 /home/wap23/sites/eCommerce/application/classes/Helper/database.php(15): PDO->__construct('mysql:host=loca...', 'eCommerce', 'eCommerce')
#1 /home/wap23/sites/eCommerce/application/classes/Model/Product.php(8): Helper_database->__construct()
#2 /home/wap23/sites/eCommerce/application/classes/Controller/Product.php(60): Model_Product->__construct()
#3 /home/wap23/sites/eCommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_getProducts()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap23/sites/eCommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap23/sites/eCommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap23/sites/eCommerce/application/classes/Helper/database.php:15
2014-12-05 03:39:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view products could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap23/sites/eCommerce/system/classes/Kohana/View.php:137
2014-12-05 03:39:59 --- DEBUG: #0 /home/wap23/sites/eCommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('products')
#1 /home/wap23/sites/eCommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('products', NULL)
#2 /home/wap23/sites/eCommerce/application/classes/Controller/Product.php(9): Kohana_View::factory('products')
#3 /home/wap23/sites/eCommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap23/sites/eCommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap23/sites/eCommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap23/sites/eCommerce/system/classes/Kohana/View.php:137
2014-12-05 15:07:52 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Product.php [ 19 ] in /home/wap23/sites/eCommerce/application/classes/Controller/Product.php:19
2014-12-05 15:07:52 --- DEBUG: #0 /home/wap23/sites/eCommerce/application/classes/Controller/Product.php(19): Kohana_Core::error_handler(8, 'Array to string...', '/home/wap23/sit...', 19, Array)
#1 /home/wap23/sites/eCommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_getProductsCount()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap23/sites/eCommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap23/sites/eCommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap23/sites/eCommerce/application/classes/Controller/Product.php:19
2014-12-05 15:08:16 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Product.php [ 19 ] in /home/wap23/sites/eCommerce/application/classes/Controller/Product.php:19
2014-12-05 15:08:16 --- DEBUG: #0 /home/wap23/sites/eCommerce/application/classes/Controller/Product.php(19): Kohana_Core::error_handler(8, 'Array to string...', '/home/wap23/sit...', 19, Array)
#1 /home/wap23/sites/eCommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_getProductsCount()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap23/sites/eCommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap23/sites/eCommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap23/sites/eCommerce/application/classes/Controller/Product.php:19