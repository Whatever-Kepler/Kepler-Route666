<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Bravo controller
 */
class Welcome extends Application
{

  /**
   * Ctor
   */
	function __construct()
	{
		parent::__construct();
	}

  /**
   *  Welcome index 
   */
  public function index() {
    // passes ''$key = 2' to show method in MY_Controller.php
    $this->show(2);
  }
}
?>
