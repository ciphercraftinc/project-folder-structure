<?php 
$http         = "http://";
$https        = "https://";
$localhost    = "localhost"; // localhost
$testserver   = "103.21.58.100"; // static ip address
$livewebsite  = ""; // live website domain
if ($_SERVER["HTTP_HOST"] == $livewebsite) {
    define("DB_HOST", "localhost");
    define("DB_NAME", "");
    define("DB_USERNAME", "");
    define("DB_PASSWORD", "");
    define("SITE_URL", $http.$_SERVER['HTTP_HOST']);
} else if($_SERVER["HTTP_HOST"] == $testserver) {
    define("DB_HOST", "localhost");
    define("DB_NAME","");
    define("DB_USERNAME", "");
    define("DB_PASSWORD", "");
    define("SITE_URL", $http.$_SERVER['HTTP_HOST']."/work/landing_page/");
} else {
    define("DB_HOST", "localhost");
    define("DB_NAME", "");
    define("DB_USERNAME", "");
    define("DB_PASSWORD", "");
    define("SITE_URL", $http.$_SERVER['HTTP_HOST']."/client/html/landing_page/");
}
define("ROOT_DIR", __DIR__ . "/");
define("SITE_NAME", "---------------------");
define('SITE_JS', SITE_URL.'assets/js/');
define('SITE_CSS', SITE_URL.'assets/css/');
define('SITE_IMAGES', SITE_URL.'assets/images/');
define("SITE_INC", SITE_URL . "includes/");
define('SITE_THEME', '#093532');
define('SITE_FONTS', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Ubuntu:wght@400;700&display=swap');
define('VER','?v='.randomString());
?>