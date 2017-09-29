<?php
/**
 *    Golf controller
 */
class Golf extends Application
{
  public function index() {
    // passes 6 to inherited function
    $this->show(6);
  }
}
?>
