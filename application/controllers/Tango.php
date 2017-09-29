<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Charlie Brown controller
 * Shows quote with index 3 at /charlie/brown
 */
class Tango extends Application
{

    /**
     * Ctor
     */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Foxtrot Tango
	 */
	public function index()
	{
		$this->show(5);
	}

}
