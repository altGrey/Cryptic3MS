<?php
/*	Cryptic3MS is Copyright 2014 CrypticRising Contributors
	For a listing of the CrypticRising Contributors, see the CONTRIBUTORS Document,
	or visit http://crypticrising.com/CrypticRising_Contributors
	
	Cryptic3MS is released under Open Source License with
	the Terms of the MIT License. To view the MIT license, see the LICENSE Document,
	or visit http://crypticrising.com/MIT
*/
crypCheck() or die();
include(pathREL."cnf/common/defaultCONF.php");
include(pathPRV."cnf/localization/".LANG."/langCONF.php");
include(pathPRV."inc/common/sysCrypLIB.php");
include(pathPRV."inc/common/dbCryptLIB.php");
define("token",genTOKEN($_SESSION));
$_SESSION['token'] = token;
///////////////// $_GET Params
$itx['get'] = safeGet($_GET);
///////////////// TIME
define("unixtime",time());
define("prettytime",getPrettyTime(unixtime));
// $_SESSION = initSession($_SESSION);
// $_SESSION = agentSession($_SESSION,$_SERVER['HTTP_USER_AGENT']);
$_SESSION = initSession($_SESSION);
$_SESSION = agentSession($_SESSION,$_SERVER['HTTP_USER_AGENT']);
runPlugins($itx,$_SESSION);
die();
exit();
