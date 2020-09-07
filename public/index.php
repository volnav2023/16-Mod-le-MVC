<?php

use App\User;
use App\Dbase;

require __DIR__ . '\..\vendor\autoload.php';
// require 'C:\wamp64\www\14-Online-Advisor\src\User.php';

echo 'Ici index.php<br>';

//initiate the triad
$model = new Model();

//It is important that the controller and the view share the model
$controller = new Controller($model);
$view = new View($model);

echo $view->output();