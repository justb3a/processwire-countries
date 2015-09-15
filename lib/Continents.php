<?php

class Continents {

  public function populate() {
    return array(
      (object) array('code' => 'AF', 'name' => 'Africa'),
      (object) array('code' => 'AS', 'name' => 'Asia'),
      (object) array('code' => 'EU', 'name' => 'Europe'),
      (object) array('code' => 'NA', 'name' => 'North America'),
      (object) array('code' => 'SA', 'name' => 'South America'),
      (object) array('code' => 'OC', 'name' => 'Oceania'),
      (object) array('code' => 'AN', 'name' => 'Antarctica')
    );
  }
}
