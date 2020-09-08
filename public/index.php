<?php

use App\User;
use App\Dbase;
use Controllers\Controller;
use Models\Model;
use Views\View;

require __DIR__ . '\..\vendor\autoload.php';

require 'C:\wamp64\www\16-Modèle-MVC\models\index_model.php';
require 'C:\wamp64\www\16-Modèle-MVC\views\index_view.php';
require 'C:\wamp64\www\16-Modèle-MVC\controllers\index_controller.php';

echo 'Ici index.php<br>';

//initiate the triad
$model = new Model();

//It is important that the controller and the view share the model
$controller = new Controller($model);
$view = new View($model);

echo $view->output();