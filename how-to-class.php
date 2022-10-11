<?php 

/*
program to understand PHP classes
*/

// A class
class Example {
	private $private_variable;		// private variable (property)
	public $public_variable;		// public variable (property)
	protected $protected_variable;	// protected variable (property)

	// constructor
	function __construct ($private_variable, $public_variable, $protected_variable) {
		$this->private_variable = $private_variable;
		$this->public_variable = $public_variable;
		$this->protected_variable = $protected_variable;
	}
}

// Another class
class Example2 extends Example {
	private $private_variable2;
	public $public_variable2;
	protected $protected_variable2;

	// constructor
	function __construct ($private_variable2, $public_variable2, $protected_variable2) {
		$this->private_variable2 = $private_variable2;
		$this->public_variable2 = $public_variable2;
		$this->protected_variable2 = $protected_variable2;
	}
}

function main() {
	//

}
main();

?>