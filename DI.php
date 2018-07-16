<?php

class demo
{

	public $a;
	
	function __construct(demo2 $Lib)
	{
		$this->a=$lib;
	}

	public function index()
	{
		
	}

	public function add()
	{

	}
}


/**
* 
*/
class demo2
{
	public function insert()
	{

	}

	public function delete()
	{

	}
}

$lib= New demo2();
$demo= New demo($lib);
