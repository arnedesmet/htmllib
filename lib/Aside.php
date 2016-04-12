<?php

    namespace arne\htmllib;

    use arnedesmet\htmllib\Element;

    class Aside extends Element
    {
        public function __construct($content)
        {
            parent::__construct($content);
            $this->tag = "aside";
        }
    }
