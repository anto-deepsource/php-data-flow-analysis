<?php

class AnotherClass extends MyClass {
  public function add1() {
    $this->number++;
  }

  private function getNumber() {
    return $this->number;
  }

  protected function getNumber1() {
    return $this->number;
  }
}
