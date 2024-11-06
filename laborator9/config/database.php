<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule=new Capsule();
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'papp_slim_laborator9',
    'username'=> 'root',
    'password'=> '',
    'chrest' => 'utf8',
    'collation' =>'utf8_unicode_ci',
    'prefix'=> '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();