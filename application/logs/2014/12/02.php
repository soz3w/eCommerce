<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-02 04:54:49 --- CRITICAL: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\views\users\register.php [ 2 ] in file:line
2014-12-02 04:54:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', 'C:\\wamp2\\www\\eC...', 2, Array)
#1 C:\wamp2\www\eCommerce\application\views\users\register.php(2): session_start()
#2 C:\wamp2\www\eCommerce\system\classes\Kohana\View.php(61): include('C:\\wamp2\\www\\eC...')
#3 C:\wamp2\www\eCommerce\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp2\\www\\eC...', Array)
#4 C:\wamp2\www\eCommerce\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp2\www\eCommerce\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\wamp2\www\eCommerce\application\classes\Controller\User.php(98): Kohana_Response->body(Object(View))
#7 C:\wamp2\www\eCommerce\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\wamp2\www\eCommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp2\www\eCommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp2\www\eCommerce\index.php(118): Kohana_Request->execute()
#13 {main} in file:line