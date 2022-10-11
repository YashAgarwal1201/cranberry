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

	public function display() {
		echo $this->private_variable . '<br>' . $this->public_variable . '<br>' . $this->protected_variable;
	}

	protected function display2() {
		echo $this->private_variable . '<br>' . $this->public_variable . '<br>' . $this->protected_variable;
	}

	private function display3() {
		echo $this->private_variable . '<br>' . $this->public_variable . '<br>' . $this->protected_variable;
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
	$var1 = new Example('aman', 6, 'delhi');
	$var1->display();
	//$var1->display2();	// will show error
	//$var1->display3();	// will show error

	$var2 = new Example2('appu', 7, 'meerut');
	//echo($var2->private_variable2);	// will show error
	//echo($var2->protected_variable2);	// will show error
	echo($var2->public_variable2);		// will show no error
}
main();

?>
