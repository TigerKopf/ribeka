<?php

require_once FUNCTION_DIR . '/utilities.php';
require_once FUNCTION_DIR . '/database.php';
require_once FUNCTION_DIR . '/email.php';
require_once FUNCTION_DIR . '/discord.php';
require __DIR__ . '/routes.php';

$url = getCurrentURL();
$domain = getDomain($url);

echo '<link rel="icon" type="image/vnd.microsoft.icon" href="https://' . $domain . '/data/img/logo.png">';

$db = getDB();