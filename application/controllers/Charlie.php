<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Charlie Brown controller
 * Shows quote with index 3 at /charlie/brown
 */
class Charlie extends Application
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
	public function brown()
	{
		$this->show(3);
	}

}
