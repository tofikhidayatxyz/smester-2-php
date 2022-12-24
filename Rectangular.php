<?php

class Rectangular {

  private int $length;
  private int $wide;

  public function __construct(int $length, int $wide)
  {
    $this->length = $length;
    $this->wide   = $wide;
  }

  public function getWide() {
    return $this->length * $this->wide;
  }
  public function getAround() {
    return 2 * ($this->length * $this->wide);
  }
}


$rectangular = new Rectangular(5, 5);

echo $rectangular->getWide();
echo $rectangular->getAround(); 