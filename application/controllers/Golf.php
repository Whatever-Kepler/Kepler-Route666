<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Golf controller
 * Shows quote with index 6 at /i/need/a/hobby
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
	 * Golf index
	 */
	public function index()
	{
		$this->show(6);
	}

}
