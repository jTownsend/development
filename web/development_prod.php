<?php

require_once __DIR__.'/../development/bootstrap.php';
require_once __DIR__.'/../development/DevelopmentKernel.php';
//require_once __DIR__.'/../development/DevelopmentCache.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new DevelopmentKernel('prod', false);
//$kernel = new AppCache(new DevelopmentKernel('prod', false));
$kernel->handle(Request::createFromGlobals())->send();
