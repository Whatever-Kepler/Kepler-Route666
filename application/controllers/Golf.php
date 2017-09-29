<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
<<<<<<< HEAD
 * Charlie Brown controller
 * Shows quote with index 3 at /charlie/brown
=======
 * Golf controller
 * Shows quote with index 6 at /i/need/a/hobby
>>>>>>> develop
 */
class Golf extends Application
{

    /**
     * Ctor
     */
	function __construct()
	{
		parent::__construct();
	}

	/**
<<<<<<< HEAD
	 * Charlie Brown
=======
	 * Golf index
>>>>>>> develop
	 */
	public function index()
	{
		$this->show(6);
	}

}
