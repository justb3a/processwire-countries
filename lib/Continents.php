<?php namespace Jos;

class Continents {

  public function populate() {
    return array(
      (object) array('code' => 'af', 'name' => 'Africa'),
      (object) array('code' => 'as', 'name' => 'Asia'),
      (object) array('code' => 'eu', 'name' => 'Europe'),
      (object) array('code' => 'na', 'name' => 'North America'),
      (object) array('code' => 'sa', 'name' => 'South America'),
      (object) array('code' => 'oc', 'name' => 'Oceania'),
      (object) array('code' => 'an', 'name' => 'Antarctica')
    );
  }
}
