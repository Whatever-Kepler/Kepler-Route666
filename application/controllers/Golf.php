<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Charlie Brown controller
 * Shows quote with index 3 at /charlie/brown
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
	 * Charlie Brown
	 */
	public function index()
	{
		$this->show(6);
	}

}
