<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Foxtrot Tango controller
 * Shows quote with index 5 at /foxtrot
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
