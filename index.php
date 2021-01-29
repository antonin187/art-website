<?php

define('__REALPATH__', __DIR__);

/*
 * ================================================================
 * ============== Domain & Uri variables declaration ==============
 * ================================================================
 */

//$domain = '/Cours/EPSI%20B1/PHP/02'; // Pour le prof
$domain = '/php/Antonin_Simon_art'; // Pour le prof
define('DOMAIN', $domain);
$uri = str_replace($domain, '', $_SERVER['REQUEST_URI']);
$segments = explode('/', $uri);

/*
 * ================================================================
 * ==================== Tools functions call ======================
 * ================================================================
 */

require_once __REALPATH__ . '/includes/tools/functions.php';

/*
 * ================================================================
 * ======================= Maintenance Mode =======================
 * ================================================================
 */

// Uncomment if down to maintenance mode
//maintenance();

/*
 * ================================================================
 * ====================== Application render ======================
 * ================================================================
 */

$page = get_page($uri, $segments);
require __REALPATH__ . '/includes/common/head.php';
echo $page;
require __REALPATH__ . '/includes/common/footer.php';