<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-03 03:51:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: myData ~ APPPATH/classes/Controller/User.php [ 61 ] in /home/wap23/sites/eCommerce/application/classes/Controller/User.php:61
2014-12-03 03:51:42 --- DEBUG: #0 /home/wap23/sites/eCommerce/application/classes/Controller/User.php(61): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap23/sit...', 61, Array)
#1 /home/wap23/sites/eCommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap23/sites/eCommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap23/sites/eCommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap23/sites/eCommerce/application/classes/Controller/User.php:61
2014-12-03 03:58:04 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/User.php [ 68 ] in file:line
2014-12-03 03:58:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 04:01:12 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/User.php [ 68 ] in file:line
2014-12-03 04:01:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 04:03:10 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/User.php [ 68 ] in file:line
2014-12-03 04:03:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 14:18:22 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Helper/database.php [ 88 ] in file:line
2014-12-03 14:18:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:03:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: page ~ APPPATH/classes/Controller/Product.php [ 27 ] in /home/wap23/sites/eCommerce/application/classes/Controller/Product.php:27
2014-12-03 10:03:39 --- DEBUG: #0 /home/wap23/sites/eCommerce/application/classes/Controller/Product.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap23/sit...', 27, Array)
#1 /home/wap23/sites/eCommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_getProducts()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap23/sites/eCommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap23/sites/eCommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap23/sites/eCommerce/application/classes/Controller/Product.php:27
2014-12-03 10:03:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: page ~ APPPATH/classes/Controller/Product.php [ 27 ] in /home/wap23/sites/eCommerce/application/classes/Controller/Product.php:27
2014-12-03 10:03:51 --- DEBUG: #0 /home/wap23/sites/eCommerce/application/classes/Controller/Product.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap23/sit...', 27, Array)
#1 /home/wap23/sites/eCommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_getProducts()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap23/sites/eCommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap23/sites/eCommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap23/sites/eCommerce/application/classes/Controller/Product.php:27