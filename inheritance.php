<?php
class Game {
	public $mainTitle;
	public $subTitle;
	public $soundtrack;
	public $setting;

    function __construct($mainTitle, $subTitle, $soundtrack, $setting) {
	 	$this->mainTitle = $mainTitle;
	 	$this->subTitle = $subTitle;
        $this->soundtrack = $soundtrack;
        $this->setting = $setting;
	 }
	 function getName() {
	 	return " $this->mainTitle," .
	 	                  $this->subTitle;
	 }
	}
	 class Info extends Game {
	 	function info() {
	 		return "The" . $this->soundtrack . "is amazing";
	 	}
	 }
     class Setting extends Game {
     	function display() {
     		return $this->setting;
     	}
     }

$me = new Game(' The Number of the Beast:', ' Unholy Wars', 'music', 'World Slavery Tour');
print "This is" . $me->getName();