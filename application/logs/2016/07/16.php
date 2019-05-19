<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-16 03:16:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: mu ~ APPPATH/classes/Controller/Index.php [ 109 ] in /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php:109
2016-07-16 03:16:46 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(109): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 109, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_tir()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php:109
2016-07-16 03:17:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: login_result ~ APPPATH/views/logowanie.php [ 2 ] in /opt/lampp/htdocs/kohana/application/views/logowanie.php:2
2016-07-16 03:17:44 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/logowanie.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 2, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(34): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/kohana/application/views/logowanie.php:2
2016-07-16 03:18:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/logowanie.php [ 2 ] in /opt/lampp/htdocs/kohana/application/views/logowanie.php:2
2016-07-16 03:18:28 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/logowanie.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 2, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(34): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/kohana/application/views/logowanie.php:2
2016-07-16 03:18:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/logowanie.php [ 2 ] in /opt/lampp/htdocs/kohana/application/views/logowanie.php:2
2016-07-16 03:18:28 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/logowanie.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 2, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(34): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/kohana/application/views/logowanie.php:2
2016-07-16 03:18:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/logowanie.php [ 2 ] in /opt/lampp/htdocs/kohana/application/views/logowanie.php:2
2016-07-16 03:18:29 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/logowanie.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 2, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(34): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/kohana/application/views/logowanie.php:2
2016-07-16 03:18:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/logowanie.php [ 2 ] in /opt/lampp/htdocs/kohana/application/views/logowanie.php:2
2016-07-16 03:18:29 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/logowanie.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 2, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(34): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/kohana/application/views/logowanie.php:2
2016-07-16 03:20:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/logowanie.php [ 72 ] in file:line
2016-07-16 03:20:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 03:20:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/logowanie.php [ 72 ] in file:line
2016-07-16 03:20:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 03:20:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/logowanie.php [ 72 ] in file:line
2016-07-16 03:20:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 03:20:32 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/logowanie.php [ 2 ] in file:line
2016-07-16 03:20:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 05:31:56 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Model/Uzytkownicy.php [ 118 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:31:56 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(118): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 118, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(82): Model_Uzytkownicy->addRowKurs('1', Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:32:24 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'fkasa' ~ APPPATH/classes/Model/Uzytkownicy.php [ 118 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:32:24 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(118): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 118, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(82): Model_Uzytkownicy->addRowKurs('1', Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:32:57 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'fkasa' ~ APPPATH/classes/Model/Uzytkownicy.php [ 118 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:32:57 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(118): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 118, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(82): Model_Uzytkownicy->addRowKurs('1', Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:33:32 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'kasa' ~ APPPATH/classes/Model/Uzytkownicy.php [ 118 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:33:32 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(118): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 118, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(82): Model_Uzytkownicy->addRowKurs('1', Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:33:56 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'kasa' ~ APPPATH/classes/Model/Uzytkownicy.php [ 118 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:33:56 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(118): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 118, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(82): Model_Uzytkownicy->addRowKurs('1', Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:35:03 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'fkasa' ~ APPPATH/classes/Model/Uzytkownicy.php [ 118 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:35:03 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(118): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 118, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(82): Model_Uzytkownicy->addRowKurs('1', Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:35:55 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'km' ~ APPPATH/classes/Model/Uzytkownicy.php [ 118 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:35:55 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(118): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 118, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(82): Model_Uzytkownicy->addRowKurs('1', Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:118
2016-07-16 05:50:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Uzytkownicy::addRowKurs() ~ APPPATH/classes/Controller/Index.php [ 82 ] in file:line
2016-07-16 05:50:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 05:51:31 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Model/Firma.php [ 6 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Firma.php:6
2016-07-16 05:51:31 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Firma.php(6): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 6, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(82): Model_Firma->addKursRow('1', Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Firma.php:6
2016-07-16 05:54:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Model/Firma.php [ 7 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Firma.php:7
2016-07-16 05:54:19 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Firma.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 7, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(82): Model_Firma->addKursRow('1', Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Firma.php:7
2016-07-16 05:54:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: przebieg ~ APPPATH/classes/Model/Firma.php [ 7 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Firma.php:7
2016-07-16 05:54:53 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Firma.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 7, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(82): Model_Firma->addKursRow('1', Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Firma.php:7
2016-07-16 05:55:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: mu ~ APPPATH/classes/Controller/Index.php [ 88 ] in /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php:88
2016-07-16 05:55:27 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 88, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php:88
2016-07-16 06:48:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:48:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:49:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:49:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:51:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:51:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:51:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:51:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:52:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:52:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:52:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:52:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:52:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:52:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:52:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:52:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:52:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:52:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:52:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:52:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:52:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:52:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:52:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:52:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:52:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:52:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:53:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:53:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Przejazdy' not found ~ APPPATH/classes/Controller/Index.php [ 83 ] in file:line
2016-07-16 06:53:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 06:53:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: mf ~ APPPATH/classes/Controller/Index.php [ 85 ] in /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php:85
2016-07-16 06:53:35 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 85, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_panel()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php:85
2016-07-16 08:44:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/main.php [ 57 ] in /opt/lampp/htdocs/kohana/application/views/main.php:57
2016-07-16 08:44:24 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 57, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(42): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:57
2016-07-16 08:53:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH/classes/Controller/Index.php [ 9 ] in /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php:9
2016-07-16 08:53:21 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Index->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php:9
2016-07-16 09:00:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/dane.php [ 42 ] in /opt/lampp/htdocs/kohana/application/views/dane.php:42
2016-07-16 09:00:26 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/dane.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 42, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(57): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_dane()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/kohana/application/views/dane.php:42
2016-07-16 09:01:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/dane.php [ 4 ] in /opt/lampp/htdocs/kohana/application/views/dane.php:4
2016-07-16 09:01:28 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/dane.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(57): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_dane()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/kohana/application/views/dane.php:4
2016-07-16 09:09:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 41 ] in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:09:15 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(12): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Index->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:11:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 42 ] in /opt/lampp/htdocs/kohana/application/views/main.php:42
2016-07-16 09:11:16 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 42, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(12): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Index->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:42
2016-07-16 09:12:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/main.php [ 52 ] in file:line
2016-07-16 09:12:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 09:12:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/main.php [ 52 ] in file:line
2016-07-16 09:12:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 09:16:50 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Index.php [ 58 ] in /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php:58
2016-07-16 09:16:50 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php(58): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 58, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_dane()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/kohana/application/classes/Controller/Index.php:58
2016-07-16 09:30:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/main.php [ 76 ] in file:line
2016-07-16 09:30:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 09:31:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 41 ] in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:31:49 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(12): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:33:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 41 ] in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:33:43 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(12): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 41 ] in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:08 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(12): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 41 ] in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:08 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(12): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 41 ] in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:09 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(12): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 41 ] in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:09 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(12): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 41 ] in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:09 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(12): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 41 ] in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:09 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(12): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 41 ] in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 09:36:09 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/main.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(12): Kohana_Response->body(Object(View))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(87): Controller_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana/application/views/main.php:41
2016-07-16 13:01:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Firma' not found ~ APPPATH/classes/Controller/Admin.php [ 106 ] in file:line
2016-07-16 13:01:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 13:08:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Przejazdy::addKursRow() ~ APPPATH/classes/Controller/Index.php [ 79 ] in file:line
2016-07-16 13:08:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 13:19:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Insert::set() ~ APPPATH/classes/Model/Przejazdy.php [ 30 ] in file:line
2016-07-16 13:19:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 13:19:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: acc ~ APPPATH/classes/Model/Przejazdy.php [ 33 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:33
2016-07-16 13:19:53 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 33, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(109): Model_Przejazdy->saveRowK(Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:33
2016-07-16 13:20:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: acc ~ APPPATH/classes/Model/Przejazdy.php [ 33 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:33
2016-07-16 13:20:29 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 33, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(109): Model_Przejazdy->saveRowK(Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:33
2016-07-16 13:20:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_acc ~ APPPATH/classes/Model/Przejazdy.php [ 33 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:33
2016-07-16 13:20:56 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 33, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(109): Model_Przejazdy->saveRowK(Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:33
2016-07-16 13:21:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_acc ~ APPPATH/classes/Model/Przejazdy.php [ 33 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:33
2016-07-16 13:21:10 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 33, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(109): Model_Przejazdy->saveRowK(Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:33
2016-07-16 13:22:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_acc ~ APPPATH/classes/Model/Przejazdy.php [ 33 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:33
2016-07-16 13:22:26 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 33, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(109): Model_Przejazdy->saveRowK(Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:33
2016-07-16 13:57:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/Model/Przejazdy.php [ 16 ] in file:line
2016-07-16 13:57:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 13:58:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: v ~ APPPATH/views/accept.php [ 33 ] in /opt/lampp/htdocs/kohana/application/views/accept.php:33
2016-07-16 13:58:03 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/accept.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 33, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(121): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/kohana/application/views/accept.php:33
2016-07-16 14:10:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_acc ~ APPPATH/classes/Model/Przejazdy.php [ 34 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:34
2016-07-16 14:10:49 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 34, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(105): Model_Przejazdy->saveRowK(Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Przejazdy.php:34
2016-07-16 14:11:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: x ~ APPPATH/classes/Controller/Admin.php [ 106 ] in /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php:106
2016-07-16 14:11:39 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 106, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php:106
2016-07-16 14:11:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: x ~ APPPATH/classes/Controller/Admin.php [ 106 ] in /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php:106
2016-07-16 14:11:41 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 106, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php:106
2016-07-16 14:22:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: typ ~ APPPATH/views/accept.php [ 42 ] in /opt/lampp/htdocs/kohana/application/views/accept.php:42
2016-07-16 14:22:29 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/views/accept.php(42): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 42, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(122): Kohana_View->render()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/kohana/application/views/accept.php:42
2016-07-16 14:28:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fkasa ~ APPPATH/classes/Model/Uzytkownicy.php [ 73 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:73
2016-07-16 14:28:29 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 73, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(121): Model_Uzytkownicy->saveRow(Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:73
2016-07-16 14:40:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Przejazdy::getSumOfAcceptedRides() ~ APPPATH/classes/Controller/Admin.php [ 104 ] in file:line
2016-07-16 14:40:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 14:55:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fkasa ~ APPPATH/classes/Model/Uzytkownicy.php [ 73 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:73
2016-07-16 14:55:45 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 73, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(106): Model_Uzytkownicy->saveRow(Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:73
2016-07-16 14:57:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fkasa ~ APPPATH/classes/Model/Uzytkownicy.php [ 73 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:73
2016-07-16 14:57:28 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 73, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(106): Model_Uzytkownicy->saveRow(Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:73
2016-07-16 14:58:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fkasa ~ APPPATH/classes/Controller/Admin.php [ 107 ] in /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php:107
2016-07-16 14:58:38 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(107): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 107, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php:107
2016-07-16 15:01:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Admin.php [ 107 ] in /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php:107
2016-07-16 15:01:28 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(107): Kohana_Core::error_handler(8, 'Undefined offse...', '/opt/lampp/htdo...', 107, Array)
#1 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php:107
2016-07-16 15:02:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fkasa ~ APPPATH/classes/Model/Uzytkownicy.php [ 73 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:73
2016-07-16 15:02:00 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 73, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(106): Model_Uzytkownicy->saveRow(Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:73
2016-07-16 15:03:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: gkasa ~ APPPATH/classes/Model/Uzytkownicy.php [ 74 ] in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:74
2016-07-16 15:03:11 --- DEBUG: #0 /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 74, Array)
#1 /opt/lampp/htdocs/kohana/application/classes/Controller/Admin.php(106): Model_Uzytkownicy->saveRow(1, Array)
#2 /opt/lampp/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_accept()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/kohana/application/classes/Model/Uzytkownicy.php:74