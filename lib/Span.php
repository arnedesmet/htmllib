<?php

    namespace Arne\htmllib;

    use arne\htmllib\Element;

    class Span extends Element
    {
        public function __construct($content, $properties = array())
        {
            parent::__construct($content, $properties);
            $this->tag = "span";
        }
    }
