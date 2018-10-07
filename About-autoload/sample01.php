<?php

// これだけでOK。他のファイルはrequireしなくてOK
require_once 'vendor/autoload.php';

$shinjuku = new myapp\japan\tokyo\Sinjuku();

$shinjuku->hello();
