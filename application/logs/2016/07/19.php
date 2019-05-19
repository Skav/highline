<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-19 13:03:58 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Nie mo�na nawi�za� po��czenia, poniewa� komputer docelowy aktywnie go odmawia.
 ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2016-07-19 13:03:58 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\xampp\htdocs\kohana\application\classes\Model\Uzytkownicy.php(23): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\kohana\application\classes\Controller.php(21): Model_Uzytkownicy->getUserById(false)
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2016-07-19 13:22:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Model\Wiadomosci.php [ 9 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:9
2016-07-19 13:22:53 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(188): Model_Wiadomosci->sendMessange('1', Array)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_wysli()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:9
2016-07-19 13:27:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Index.php [ 188 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php:188
2016-07-19 13:27:03 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(188): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 188, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_wysli()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php:188
2016-07-19 13:29:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\Index.php [ 190 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php:190
2016-07-19 13:29:42 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(190): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 190, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_wysli()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php:190
2016-07-19 13:30:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'field list' [ INSERT INTO `pw` (`user_id`, `user_nick`, `head`, `text`) VALUES ('1', '', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2016-07-19 13:30:42 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pw...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(10): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(190): Model_Wiadomosci->sendMessange('1', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_wysli()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2016-07-19 13:35:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Index.php [ 180 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php:180
2016-07-19 13:35:01 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(180): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 180, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_wysli()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php:180
2016-07-19 13:39:41 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'field list' [ INSERT INTO `pw` (`user_id`, `user_nick`, `head`, `text`) VALUES ('Skav', 'sss', 'sss', 'sss') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2016-07-19 13:39:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pw...', false, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(10): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(191): Model_Wiadomosci->sendMessange(Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_wysli()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2016-07-19 13:43:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Model\Wiadomosci.php [ 18 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:18
2016-07-19 13:43:02 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 18, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(216): Model_Wiadomosci->takeMessangeByNick(Array)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:18
2016-07-19 13:48:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH\classes\Controller\Index.php [ 218 ] in file:line
2016-07-19 13:48:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-19 13:48:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Index.php [ 221 ] in file:line
2016-07-19 13:48:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-19 13:48:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Index.php [ 221 ] in file:line
2016-07-19 13:48:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-19 13:48:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Index.php [ 221 ] in file:line
2016-07-19 13:48:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-19 13:48:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Index.php [ 221 ] in file:line
2016-07-19 13:48:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-19 13:48:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Index.php [ 221 ] in file:line
2016-07-19 13:48:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-19 14:41:17 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 224 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:41:17 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(224): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:43:41 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 224 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:43:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(224): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:44:12 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 224 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:44:12 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(224): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:44:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH\views\odbierz.php [ 9 ] in C:\xampp\htdocs\kohana\application\views\odbierz.php:9
2016-07-19 14:44:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\odbierz.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(226): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\odbierz.php:9
2016-07-19 14:45:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mw ~ APPPATH\classes\Controller\Index.php [ 213 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php:213
2016-07-19 14:45:35 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(213): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 213, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php:213
2016-07-19 14:45:47 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 216 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:45:47 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(216): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:52 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 223 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(223): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:53 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 223 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:53 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(223): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:54 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 223 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:54 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(223): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:54 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 223 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:54 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(223): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:54 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 223 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:54 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(223): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:54 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 223 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:54 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(223): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:55 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 223 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(223): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:55 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 223 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(223): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:55 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 223 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:47:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(223): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:48:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH\views\odbierz.php [ 9 ] in C:\xampp\htdocs\kohana\application\views\odbierz.php:9
2016-07-19 14:48:11 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\odbierz.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(225): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\odbierz.php:9
2016-07-19 14:48:48 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Wiadomosci::takeMessangeByNick(), called in C:\xampp\htdocs\kohana\application\classes\Controller\Index.php on line 223 and defined ~ APPPATH\classes\Model\Wiadomosci.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14
2016-07-19 14:48:48 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\Index.php(223): Model_Wiadomosci->takeMessangeByNick()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_odbierz()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\Wiadomosci.php:14