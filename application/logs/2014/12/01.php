<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-01 09:39:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view register could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap23/sites/eCommerce/system/classes/Kohana/View.php:137
2014-12-01 09:39:18 --- DEBUG: #0 /home/wap23/sites/eCommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('register')
#1 /home/wap23/sites/eCommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('register', NULL)
#2 /home/wap23/sites/eCommerce/application/classes/Controller/User.php(9): Kohana_View::factory('register')
#3 /home/wap23/sites/eCommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap23/sites/eCommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap23/sites/eCommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap23/sites/eCommerce/system/classes/Kohana/View.php:137
2014-12-01 09:41:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap23/sites/eCommerce/system/classes/Kohana/View.php:137
2014-12-01 09:41:39 --- DEBUG: #0 /home/wap23/sites/eCommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /home/wap23/sites/eCommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /home/wap23/sites/eCommerce/application/classes/Controller/User.php(18): Kohana_View::factory('login')
#3 /home/wap23/sites/eCommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap23/sites/eCommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap23/sites/eCommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap23/sites/eCommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap23/sites/eCommerce/system/classes/Kohana/View.php:137