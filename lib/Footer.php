<?php

    namespace Arne\htmllib;

    use arne\htmllib\Element;

    class Footer extends Element
    {
        public function __construct($content)
        {
            parent::__construct($content);
            $this->tag = "footer";
        }
    }
