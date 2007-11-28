<?php

/**
 * Subclass for representing a row from the 'factura' table.
 *
 *
 *
 * @package lib.model
 */
class Factura extends BaseFactura
{
  public function __toString()
  {return $this->getFactNum().' '.$this->getFecEmis('d/M/y');}
}
