<?php namespace MGatner\PHPStorm;

require_once 'Builder.php';
require_once 'Connection.php';
require_once 'Model.php';

$db = new Connection();

$builder = new Builder($db);
$model   = new Model($db, $builder);

echo $model->db->name;
echo PHP_EOL;
