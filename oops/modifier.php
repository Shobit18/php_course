<?php
class Person {
    public $name;
    public $age;
    public $weight;

    function setName($name) { //public function
         $this->name = $name;
    }
  protected function setAge($age) {
      $this->age = $age;
  }

  private function set_weight($weight) {
      $this->weight = $weight;
  }
}

$p = new Person();
$p->setName("shobit");
$p->setAge("22");
$p->set_weight("60");

?>