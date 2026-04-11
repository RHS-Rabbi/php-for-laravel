<?php
// 12-include-require-include_once-require_once

// config.php

$db_host = 'localhost';
$db_name = 'projuctiplus';

// index.php
include 'config.php';
// না থাকলে warning , চলতে থাকে

require 'config.php';
// না থাকলে Fatal error , থামে

include_once 'config.php';
// এক বারে বেশি include করে না

require_once 'config.php';
//  require + একবার মাত্র

echo $db_host; // -> localhost
?>