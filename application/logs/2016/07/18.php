<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-18 13:59:17 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'login' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2016-07-18 13:59:17 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('login')
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#3 C:\xampp\htdocs\kohana\application\classes\Model\Uzytkownicy.php(23): Kohana_Database_Query->execute()
#4 C:\xampp\htdocs\kohana\application\classes\Controller.php(21): Model_Uzytkownicy->getUserById(false)
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller->before()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2016-07-18 14:17:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH\views\usun.php [ 31 ] in C:\xampp\htdocs\kohana\application\views\usun.php:31
2016-07-18 14:17:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\usun.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 31, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(94): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_usun()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\usun.php:31
2016-07-18 14:18:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mp ~ APPPATH\classes\Controller\Admin.php [ 96 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:96
2016-07-18 14:18:16 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 96, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_usun()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:96
2016-07-18 14:18:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mp ~ APPPATH\classes\Controller\Admin.php [ 96 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:96
2016-07-18 14:18:17 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 96, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_usun()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:96
2016-07-18 14:27:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ APPPATH\views\usun.php [ 52 ] in C:\xampp\htdocs\kohana\application\views\usun.php:52
2016-07-18 14:27:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\usun.php(52): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 52, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(95): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_usun()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\usun.php:52
2016-07-18 14:37:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Przejazdy::getUserById() ~ APPPATH\classes\Controller\Admin.php [ 30 ] in file:line
2016-07-18 14:37:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-18 15:56:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\dodaj.php [ 40 ] in C:\xampp\htdocs\kohana\application\views\dodaj.php:40
2016-07-18 15:56:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\dodaj.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 40, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(66): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\dodaj.php:40
2016-07-18 15:59:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH\classes\Controller\Admin.php [ 57 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:57
2016-07-18 15:59:04 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:57
2016-07-18 15:59:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH\classes\Controller\Admin.php [ 63 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:63
2016-07-18 15:59:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:63
2016-07-18 15:59:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH\classes\Controller\Admin.php [ 63 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:63
2016-07-18 15:59:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:63
2016-07-18 15:59:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH\classes\Controller\Admin.php [ 63 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:63
2016-07-18 15:59:27 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:63
2016-07-18 15:59:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH\classes\Controller\Admin.php [ 63 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:63
2016-07-18 15:59:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:63
2016-07-18 15:59:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH\classes\Controller\Admin.php [ 63 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:63
2016-07-18 15:59:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:63
2016-07-18 16:09:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\dodaj.php [ 39 ] in C:\xampp\htdocs\kohana\application\views\dodaj.php:39
2016-07-18 16:09:09 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\dodaj.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 39, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(66): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\dodaj.php:39
2016-07-18 16:09:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\dodaj.php [ 39 ] in C:\xampp\htdocs\kohana\application\views\dodaj.php:39
2016-07-18 16:09:10 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\dodaj.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 39, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(66): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\dodaj.php:39
2016-07-18 16:09:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\dodaj.php [ 39 ] in C:\xampp\htdocs\kohana\application\views\dodaj.php:39
2016-07-18 16:09:10 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\dodaj.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 39, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(66): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\dodaj.php:39
2016-07-18 16:09:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\dodaj.php [ 39 ] in C:\xampp\htdocs\kohana\application\views\dodaj.php:39
2016-07-18 16:09:11 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\dodaj.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 39, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(66): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\dodaj.php:39
2016-07-18 16:10:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Admin.php [ 57 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:57
2016-07-18 16:10:31 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:57
2016-07-18 16:10:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Admin.php [ 57 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:57
2016-07-18 16:10:32 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin->action_dodaj()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Admin.php:57
2016-07-18 16:11:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function pritn_r() ~ APPPATH\views\dodaj.php [ 38 ] in file:line
2016-07-18 16:11:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-18 16:11:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function pritn_r() ~ APPPATH\views\dodaj.php [ 38 ] in file:line
2016-07-18 16:11:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-18 16:11:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function pritn_r() ~ APPPATH\views\dodaj.php [ 38 ] in file:line
2016-07-18 16:11:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line