<?php

    namespace Arne\htmllib;

    use arne\htmllib\Element;

    class Nav extends Element
    {
        public function __construct($content)
        {
            parent::__construct($content);
            $this->tag = "nav";
        }
    }
