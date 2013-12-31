<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-31 15:07:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Home.php [ 11 ] in file:line
2013-12-31 15:07:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-31 15:13:05 --- CRITICAL: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 102 ] in D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php:114
2013-12-31 15:13:05 --- DEBUG: #0 D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 D:\websites\kohana.dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 D:\websites\kohana.dev\index.php(118): Kohana_Request->execute()
#3 {main} in D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php:114
2013-12-31 15:20:28 --- CRITICAL: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 102 ] in D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php:114
2013-12-31 15:20:28 --- DEBUG: #0 D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 D:\websites\kohana.dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 D:\websites\kohana.dev\index.php(118): Kohana_Request->execute()
#3 {main} in D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php:114
2013-12-31 15:20:37 --- CRITICAL: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 102 ] in D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php:114
2013-12-31 15:20:37 --- DEBUG: #0 D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 D:\websites\kohana.dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 D:\websites\kohana.dev\index.php(118): Kohana_Request->execute()
#3 {main} in D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php:114
2013-12-31 15:24:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Home.php [ 10 ] in file:line
2013-12-31 15:24:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-31 15:47:04 --- CRITICAL: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\websites\kohana.dev\system\classes\Kohana\View.php:137
2013-12-31 15:47:04 --- DEBUG: #0 D:\websites\kohana.dev\system\classes\Kohana\View.php(137): Kohana_View->set_filename('home')
#1 D:\websites\kohana.dev\system\classes\Kohana\View.php(30): Kohana_View->__construct('home', NULL)
#2 D:\websites\kohana.dev\application\classes\Controller\Home.php(9): Kohana_View::factory('home')
#3 D:\websites\kohana.dev\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\websites\kohana.dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\websites\kohana.dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\websites\kohana.dev\index.php(118): Kohana_Request->execute()
#9 {main} in D:\websites\kohana.dev\system\classes\Kohana\View.php:137
2013-12-31 16:03:43 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\KOstache\init.php [ 4 ] in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:03:43 --- DEBUG: #0 D:\websites\kohana.dev\modules\KOstache\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'D:\websites\koh...', 4, Array)
#1 D:\websites\kohana.dev\modules\KOstache\init.php(4): include()
#2 D:\websites\kohana.dev\system\classes\Kohana\Core.php(602): require_once('D:\websites\koh...')
#3 D:\websites\kohana.dev\application\bootstrap.php(133): Kohana_Core::modules(Array)
#4 D:\websites\kohana.dev\index.php(102): require('D:\websites\koh...')
#5 {main} in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:07 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\KOstache\init.php [ 4 ] in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:07 --- DEBUG: #0 D:\websites\kohana.dev\modules\KOstache\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'D:\websites\koh...', 4, Array)
#1 D:\websites\kohana.dev\modules\KOstache\init.php(4): include()
#2 D:\websites\kohana.dev\system\classes\Kohana\Core.php(602): require_once('D:\websites\koh...')
#3 D:\websites\kohana.dev\application\bootstrap.php(133): Kohana_Core::modules(Array)
#4 D:\websites\kohana.dev\index.php(102): require('D:\websites\koh...')
#5 {main} in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:08 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\KOstache\init.php [ 4 ] in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:08 --- DEBUG: #0 D:\websites\kohana.dev\modules\KOstache\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'D:\websites\koh...', 4, Array)
#1 D:\websites\kohana.dev\modules\KOstache\init.php(4): include()
#2 D:\websites\kohana.dev\system\classes\Kohana\Core.php(602): require_once('D:\websites\koh...')
#3 D:\websites\kohana.dev\application\bootstrap.php(133): Kohana_Core::modules(Array)
#4 D:\websites\kohana.dev\index.php(102): require('D:\websites\koh...')
#5 {main} in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:09 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\KOstache\init.php [ 4 ] in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:09 --- DEBUG: #0 D:\websites\kohana.dev\modules\KOstache\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'D:\websites\koh...', 4, Array)
#1 D:\websites\kohana.dev\modules\KOstache\init.php(4): include()
#2 D:\websites\kohana.dev\system\classes\Kohana\Core.php(602): require_once('D:\websites\koh...')
#3 D:\websites\kohana.dev\application\bootstrap.php(133): Kohana_Core::modules(Array)
#4 D:\websites\kohana.dev\index.php(102): require('D:\websites\koh...')
#5 {main} in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:11 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\KOstache\init.php [ 4 ] in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:11 --- DEBUG: #0 D:\websites\kohana.dev\modules\KOstache\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'D:\websites\koh...', 4, Array)
#1 D:\websites\kohana.dev\modules\KOstache\init.php(4): include()
#2 D:\websites\kohana.dev\system\classes\Kohana\Core.php(602): require_once('D:\websites\koh...')
#3 D:\websites\kohana.dev\application\bootstrap.php(133): Kohana_Core::modules(Array)
#4 D:\websites\kohana.dev\index.php(102): require('D:\websites\koh...')
#5 {main} in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:13 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\KOstache\init.php [ 4 ] in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:13 --- DEBUG: #0 D:\websites\kohana.dev\modules\KOstache\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'D:\websites\koh...', 4, Array)
#1 D:\websites\kohana.dev\modules\KOstache\init.php(4): include()
#2 D:\websites\kohana.dev\system\classes\Kohana\Core.php(602): require_once('D:\websites\koh...')
#3 D:\websites\kohana.dev\application\bootstrap.php(133): Kohana_Core::modules(Array)
#4 D:\websites\kohana.dev\index.php(102): require('D:\websites\koh...')
#5 {main} in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:14 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\KOstache\init.php [ 4 ] in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 16:08:14 --- DEBUG: #0 D:\websites\kohana.dev\modules\KOstache\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'D:\websites\koh...', 4, Array)
#1 D:\websites\kohana.dev\modules\KOstache\init.php(4): include()
#2 D:\websites\kohana.dev\system\classes\Kohana\Core.php(602): require_once('D:\websites\koh...')
#3 D:\websites\kohana.dev\application\bootstrap.php(133): Kohana_Core::modules(Array)
#4 D:\websites\kohana.dev\index.php(102): require('D:\websites\koh...')
#5 {main} in D:\websites\kohana.dev\modules\KOstache\init.php:4
2013-12-31 22:59:20 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gertrietveld_nl.work' doesn't exist [ SHOW FULL COLUMNS FROM `work` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\websites\kohana.dev\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-31 22:59:20 --- DEBUG: #0 D:\websites\kohana.dev\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\websites\kohana.dev\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('work')
#2 D:\websites\kohana.dev\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\websites\kohana.dev\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\websites\kohana.dev\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\websites\kohana.dev\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\websites\kohana.dev\application\classes\Controller\Work.php(12): Kohana_ORM::factory('Work')
#7 D:\websites\kohana.dev\system\classes\Kohana\Controller.php(84): Controller_Work->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\websites\kohana.dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Work))
#10 D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\websites\kohana.dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\websites\kohana.dev\index.php(118): Kohana_Request->execute()
#13 {main} in D:\websites\kohana.dev\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-31 23:02:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Works' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-31 23:02:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-31 23:03:13 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gertrietveld_nl.work' doesn't exist [ SHOW FULL COLUMNS FROM `work` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\websites\kohana.dev\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-31 23:03:13 --- DEBUG: #0 D:\websites\kohana.dev\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\websites\kohana.dev\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('work')
#2 D:\websites\kohana.dev\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\websites\kohana.dev\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\websites\kohana.dev\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\websites\kohana.dev\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\websites\kohana.dev\application\classes\Controller\Work.php(12): Kohana_ORM::factory('Work')
#7 D:\websites\kohana.dev\system\classes\Kohana\Controller.php(84): Controller_Work->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\websites\kohana.dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Work))
#10 D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\websites\kohana.dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\websites\kohana.dev\index.php(118): Kohana_Request->execute()
#13 {main} in D:\websites\kohana.dev\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-31 23:04:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\work.php [ 10 ] in D:\websites\kohana.dev\application\views\work.php:10
2013-12-31 23:04:40 --- DEBUG: #0 D:\websites\kohana.dev\application\views\work.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\websites\koh...', 10, Array)
#1 D:\websites\kohana.dev\system\classes\Kohana\View.php(61): include('D:\websites\koh...')
#2 D:\websites\kohana.dev\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\websites\koh...', Array)
#3 D:\websites\kohana.dev\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\websites\kohana.dev\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\websites\kohana.dev\application\classes\Controller\Work.php(17): Kohana_Response->body(Object(View))
#6 D:\websites\kohana.dev\system\classes\Kohana\Controller.php(84): Controller_Work->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\websites\kohana.dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Work))
#9 D:\websites\kohana.dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\websites\kohana.dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\websites\kohana.dev\index.php(118): Kohana_Request->execute()
#12 {main} in D:\websites\kohana.dev\application\views\work.php:10