<?php

namespace Controllers;

use Source\Renderer;

class HomeController {

    public function home() {
        $renderer = new Renderer('home/index');
    }
}