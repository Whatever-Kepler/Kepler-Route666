<?php

/**
 * Delta Force controller
 * Shows quote with index 4 at /delta/force
 */
class Force extends Application
{

  /**
   * Ctor
   */
  function __construct()
  {
    parent::__construct();
  }

  /**
   *  index function 
   */
  public function index() {
    $this->show(4);
  }
}
?>
