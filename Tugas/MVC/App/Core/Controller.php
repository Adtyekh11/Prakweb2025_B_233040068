<?php

class Controller {
    public function view($view, $data = []) {
        $file = __DIR__ . '/../View/' . $view . '.php';
        if (file_exists($file)) {
            require_once $file;
        } 
    }

    public function model($model) {
        require_once __DIR__ . '/../Models/' . $model . '.php';
        return new $model;
    }
}
