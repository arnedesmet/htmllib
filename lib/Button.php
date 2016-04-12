<?php

    namespace Arne\htmllib;

    use arne\htmllib\Element;

    require_once("Element.php");

    class Button extends Element
    {
        public function __construct($content, $properties = array())
        {
            parent::__construct($content, $properties);
            $this->tag = "button";
        }
    }
