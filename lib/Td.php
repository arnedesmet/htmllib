<?php

namespace Arne\htmllib;

require_once("Element.php");

class Td extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "Td";
  }
}
