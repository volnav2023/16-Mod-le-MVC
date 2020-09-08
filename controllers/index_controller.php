<?php

namespace Controllers;

use Models\Model;

class Controller {
    private $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function control($url) {
        echo $url;
        $this->model->text = sprintf("Hello %s", $url);
    }
}