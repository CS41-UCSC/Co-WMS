<?php

class View {

    function __construct() {
    }

    public function render($viewName) {
        require_once ('views/' . $viewName . '.php');
    }
}
