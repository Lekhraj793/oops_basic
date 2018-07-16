<?php

abstract class BaseClass 	//if we don't want to create this class object so we create abstract class.
{
	protected $firstname;
	protected $lastname;

	public function getFullName()
	{
		return $this->firstname." ". $this->lastname;
	}

	public abstract function getMonthSalary();	/**if this function not abstract so this ->(Fatal error: Non-abstract method 												hw_Deleteobject(connection, object_to_delete):\xam\htdocs\test\abstract.php
													readline_on_new_line(13) error show.**/
	
	public function __construct($f, $l)
	{
		$this->firstname=$f;
		$this->lastname=$l;
	}	
}

class FullTimeEmployee extends BaseClass
{
	protected $annualsalary;
	
	public function getMonthSalary()	
	{
		return $this->annualsalary/12;		/**if we change this function name so Fatal error: Class FullTimeEmployee contains 1 									abstract method and must therefore be declared abstract or implement the remaining 										methods (BaseClass::getMonthSalary) in D:\xam\htdocs\test\abstract.php on line 32**/
	}
}

class ContractEmployee extends BaseClass
{
	protected $workhours;
	protected $totalhours;
	
	public function getMonthSalary()
	{
		return $this->workhours * $this->totalhours;
	}
}

$fulltime=new FullTimeEmployee('Lekhraj', 'verma');
$contract=new ContractEmployee('Vicky','verma');

echo $fulltime->getFullName();
echo $contract->getFullName();

// echo $fulltime->getMonthSalary();
// echo $fulltime->getMonthSalary();