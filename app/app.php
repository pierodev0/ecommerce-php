<?php

use eftec\bladeone\BladeOne;
include __DIR__."/../vendor/autoload.php";

function blade() {
  global $blade;

  if ($blade===null) {
      $blade=new BladeOne();
      $blade->setMode(BladeOne::MODE_DEBUG);
  }
  return $blade;
}