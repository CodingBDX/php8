<?php

namespace Source;

class Renderer {
    public function __construct(private string $viewPath)
    {
        
    }

    public function view() {
        ob_start();

        require BASE_VIEW_BASE . $this->viewPath . '.php';

        return ob_get_clean();
    }

    public static function make(string $viewPath): static {
return new static(); 
    }
}

