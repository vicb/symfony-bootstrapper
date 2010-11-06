<?php

require_once __DIR__.'/../{{ application }}/{{ class }}Kernel.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new {{ class }}Kernel('prod', false);
$kernel->handle(new Request())->send();
