<?php
    //DB Info
    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'admin');
    define('DB_PASS', 'rootroot');
    define('DB_NAME', 'PurfectPaws');
    //App root
    define('APPROOT', dirname(__FILE__, 2));
    //URL Root
    define('URLROOT', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]");
    const SITENAME = 'PurfectPaws';
