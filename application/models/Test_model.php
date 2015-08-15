<?php

class Test_model extends MY_Model {
	protected $table = 'test';
	protected $primaryKey = 'testId';

	public function __construct()
	{
		parent::__construct();
	}
}