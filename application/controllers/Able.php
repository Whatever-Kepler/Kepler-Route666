<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Able controller
 * Shows the quote with index 1 at /able
 */
class Able extends Application
{
    /**
     * Ctor
     */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Able index
	 */
	public function index()
	{
        $this->show(1);
	}

}
