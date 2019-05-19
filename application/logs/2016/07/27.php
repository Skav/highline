<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-27 09:44:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: acc ~ APPPATH\classes\Model\Wiadomosci.php [ 31 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:31
2016-07-27 09:44:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 31, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(212): Model_Wiadomosci->delRowMessange(Array)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:31
2016-07-27 09:52:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Admin.php [ 182 ] in file:line
2016-07-27 09:52:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-27 10:05:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\Wiadomosci.php [ 45 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:45
2016-07-27 10:05:23 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 45, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(237): Model_Wiadomosci->delRowMessange(Array)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odebrane()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:45
2016-07-27 11:16:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: row ~ APPPATH\views\uprawnienia.php [ 15 ] in C:\xampp\htdocs\kohana\application\views\uprawnienia.php:15
2016-07-27 11:16:42 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\uprawnienia.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(151): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_uprawnienia()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\uprawnienia.php:15
2016-07-27 11:34:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\views\uprawnienia.php [ 35 ] in file:line
2016-07-27 11:34:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-27 14:09:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\views\uprawnienia.php [ 36 ] in C:\xampp\htdocs\kohana\application\views\uprawnienia.php:36
2016-07-27 14:09:02 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\uprawnienia.php(36): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 36, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(167): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_uprawnienia()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\uprawnienia.php:36
2016-07-27 14:09:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Admin.php [ 163 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:163
2016-07-27 14:09:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(163): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 163, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_uprawnienia()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:163