<?php

    namespace Arne\htmllib;

    use arne\htmllib\Element;

    class Table extends Element
    {
        public function __construct($content)
        {
            parent::__construct($content);
            $this->tag = "table";
        }
    }
