<?php 
class Band {
	public $frontman;
	public $manager;

	   public function __construct($frontman, $manager) {
	     $this->frontman = $frontman;
	     $this->manager = $manager;
	   }

	public function greet1() {
		return "Oderus is the" . " $this->frontman" . " for GWAR";
	}
	public function greet2(){
        return "Sleazy is the" . " $this->manager" . " for GWAR";
	}
}
$me = new Band('frontman', 'manager');
echo $me->greet1();
echo $me->greet2();