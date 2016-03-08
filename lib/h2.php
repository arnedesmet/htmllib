<?php

namespace Arne\htmllib;

require_once("Element.php");

class H2 extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "h2";
  }
}
