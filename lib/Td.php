<?php

    namespace Arne\htmllib;

    use arne\htmllib\Element;

    class Td extends Element
    {
        public function __construct($content)
        {
            parent::__construct($content);
            $this->tag = "Td";
        }
    }
