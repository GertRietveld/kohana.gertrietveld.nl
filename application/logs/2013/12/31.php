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