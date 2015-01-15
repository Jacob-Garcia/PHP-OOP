<?php 
// Example 1 // 
class Band {
	public $frontman;
	public $manager;

	   public function __construct($frontman, $manager) {
	     $this->frontman = $frontman;
	     $this->manager = $manager;
	   }

	public function greet1() {
		return "Oderus is the" . " $this->frontman" . " for GWAR." . "\n";
	}
	public function greet2(){
        return "Sleazy is the" . " $this->manager" . " for GWAR." . "\n";
	}
}
$me = new Band('frontman', 'manager');
echo $me->greet1();
echo $me->greet2();


//Example 2 //
class Song {
	public $intro;
	public $chorus;
	public $solo;

	   public function __construct($intro, $chorus, $solo) {
	   	$this->intro = $intro;
	   	$this->chorus = $chorus;
	   	$this->solo = $solo;
	   }
	public function thing1() {
		 return "The" . " $this->intro" . " to a song makes it recognizable." . "\n";
	}
	public function thing2() {
		return "The" . " $this->chorus" . " is one of the best parts of a song." . "\n";
	}
	public function thing3() {
		return "The" . " $this->solo" . " is amazing and shows epic guitar skills." . "\n";
	}
} 
$me = new Song('intro', 'chorus', 'solo');
print $me->thing1();
print $me->thing2();
print $me->thing3();