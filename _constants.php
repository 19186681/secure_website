<?php

namespace PH7;

defined('PH7') or exit(header('Location: ./'));

################################### VARIABLES ###################################

#################### PATH ####################

#################### URL ####################

// Check the SSL protocol compatibility
$sHttp = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) === 'on') ? 'https://' : 'http://';
// Determine the domain name, with the port if necessary
$sServerName = $_SERVER['SERVER_NAME'] !== $_SERVER['HTTP_HOST'] ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
$sDomain = ($_SERVER['SERVER_PORT'] !== '80' && $_SERVER['SERVER_PORT'] !== '443' && strpos($sServerName, ':') === false) ? $sServerName . ':' . $_SERVER['SERVER_PORT'] : $sServerName;

// Get the domain that the cookie and cookie session is available (Set-Cookie: domain=your_site_name.com)
// $sDomain_cookie = (substr($_SERVER['HTTP_HOST'], 0, 4) === 'www.') ? '.' . substr($_SERVER['HTTP_HOST'], 4) : '.' . $_SERVER['HTTP_HOST'];
$sDomain_cookie = '.' . str_replace('www.', '', $sDomain);

// Determine the current file of the application
$sPhp_self = str_replace('\\', '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))); // Remove backslashes for Windows compatibility


################################### CONSTANTS ###################################

#################### OTHER ####################

define('PH7_DS', DIRECTORY_SEPARATOR);
define('PH7_PS', PATH_SEPARATOR);
define('PH7_SH', '/'); // SlasH
define('PH7_SELF', (substr($sPhp_self, -1) !== PH7_SH) ? $sPhp_self . PH7_SH : $sPhp_self);
define('PH7_RELATIVE', PH7_SELF);


#################### PATH ####################

define('PH7_PATH_ROOT', __DIR__ . PH7_DS);
define('PH7_PATH_PROTECTED', '/usr/share/nginx/html/_protected/');
define('PH7_PATH_APP', PH7_PATH_PROTECTED . 'app/');
define('PH7_PATH_FRAMEWORK', PH7_PATH_PROTECTED . 'framework/');
define('PH7_PATH_LIBRARY', PH7_PATH_PROTECTED . 'library/');


#################### URL (PUBLIC) ####################

define('PH7_URL_PROT', $sHttp); // URL protocol
define('PH7_DOMAIN', $sDomain); // URL domain
define('PH7_DOMAIN_COOKIE', $sDomain_cookie);
define('PH7_URL_ROOT', PH7_URL_PROT . PH7_DOMAIN . PH7_SELF);
