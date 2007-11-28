<?php

/**
 * Subclass for representing a row from the 'reng_fac' table.
 *
 *
 *
 * @package lib.model
 */
class RengFac extends BaseRengFac
{
  public function __toString()
  {
    $c = new Criteria();
    $c->add(ArtPeer::CO_ART,$this->getCoArt());
    $art = ArtPeer::doSelectOne($c);
    if($art) return $art->getArtDes();
      else return $this->getCoArt();
  }
}
