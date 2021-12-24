<?php

/* Constant defintion  of URI BASE*/
DEFINE('BASE_URI', 'http://'. $_SERVER['SERVER_NAME'].'/MVC/');
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
/*Constant SEO varaibles */
DEFINE('WEBSITE_TITLE','CHAT APPLICATION');
DEFINE('WEBSITE_LANGUAGE', 'english');
DEFINE('WEBSITE_AUTHOR','MAROUANE');
DEFINE('WEBSITE_DESCRIPTION','CHAT APPLICATION FOR PROFESSIONAL COMMUNICATION');
DEFINE('WEBSITE_KEYWORDS','chat, professional, work, remote');

/* Constant DB connexion */
DEFINE('DB_HOST','localhost');
DEFINE('DB_USER','root');
DEFINE('DB_PASS','');
DEFINE('DB_NAME','CHAT_Database');

?>