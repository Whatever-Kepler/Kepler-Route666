<?php
/**
 *  Bravo controller 
 */
class Welcome extends Application
{
  public function index() {
    // passes ''$key = 2' to show method in MY_Controller.php
    $this->show(2);
  }
}
?>
