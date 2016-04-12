<?php

    namespace Arne\htmllib;

    use arne\htmllib\Element;

    class H1 extends Element
    {
        public function __construct($content)
        {
            parent::__construct($content);
            $this->tag = "h1";
        }
    }
