<?php

class Game {
	public $title;
	public $genre;
	public $menu;
	public $settings;
	public $mainGame;

	   function __construct($title, $genre, $menu, $settings, $mainGame) {
	   	 $this->title = $title;
	   	 $this->genre = $genre;
	   	 $this->menu = $menu;
	   	 $this->settings = $settings;
	   	 $this->mainGame = $mainGame;
	   }

	   function getName() {
	   	  return "This is the video game," . " $this->title," .
	   	  "The genre is" . " $this->genre ";
	   }
}
 class Sequel extends Game {
 	function __construct($title, $genre, $menu, $settings, $mainGame, $miniGame) {
       parent::__construct($title, $genre, $menu, $settings, $mainGame);
       $this->miniGame = $miniGame;
 	}
 	function miniGame() {
 		return $this->miniGame;
 	}
 }
 class Prequel extends Game {
 	function __construct($title, $genre, $menu, $settings, $mainGame, $miniGame, $nChar) {
 		parent::__construct($title, $genre, $menu, $settings, $mainGame, $miniGame);
        $this->nChar = $nChar;		
 	}
 	function nChar() {
 		return $this->nChar;
 	}
 }

 $me = new Sequel("TNOTB", "Action", "menu", "settings", "main game", "mini game", "new character");
 print "Sequel is" . $me->getName();