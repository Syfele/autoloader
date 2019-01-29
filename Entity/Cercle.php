<?php

namespace testdome\Entity;
use testdome\Model\Forme;
class Cercle implements Forme{

	public $color;

	function __construct($r) {
		$this->r = $r;
	}

	public function surface() {
		return $this->r**2 * 3.14;
	}

	public function perimetre() {
		return 2 * 3.14 * $this->r ;
	}

	public function setColor($color) {
		$this->color = $color;
	}

	public function getColor(){
		return $this->color;
	}
}