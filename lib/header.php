<?php

    namespace Arne\htmllib;

    use arne\htmllib\Element;

    class Header extends Element
    {
        public function __construct($content)
        {
            parent::__construct($content);
            $this->tag = "header";
        }
    }
