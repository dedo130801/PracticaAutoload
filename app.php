<?php

require_once 'vendor/autoload.php';

$t = new Transporte();
$t->arrancar();

$r = new Ruta();
$r->arrancar();

$p = new Particular();
$p->arrancar();