<?php
/**
 *    Delta Controller
 */

class Force extends Application
{
  public function index() {
    // passes 4 to the inherited method
    $this->show(4);
  }
}
?>
