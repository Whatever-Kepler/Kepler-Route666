<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Charlie Brown controller
 * Shows quote with index 3 at /charlie/brown
 */
class Must extends Application
{

    /**
     * Ctor
     */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Must wehave
	 */
	public function wehave()
	{
		$this->show(5);
	}

}
?>
