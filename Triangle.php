<?php

class Triangle {


  private int $length;
  private int $height;
  private int $wide;

  public function __construct(int $length, int $wide, int $height)
  {
    $this->length = $length;
    $this->height = $height;
    $this->wide   = $wide;
  }

  public function getWide() {
    return .5 * (($this->length * $this->wide) * $this->height);
  }
  public function getAround() {
    return $this->length * 3;
  }
}


$triangle = new Triangle(5, 5, 5);

echo $triangle->getWide();
echo $triangle->getAround(); 