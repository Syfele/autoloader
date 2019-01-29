<?php

namespace testdome\Entity;
use testdome\Model\Forme;
class Carre implements Forme{

	private $color;

	public function __construct($l) {
		$this->l = $l;
	}

	public function surface() {
		return $this->l**2;
	}

	public function perimetre() {
		return $this->l * 4;
	}

	public function setColor($color) {
		$this->color = $color;
	}

	public function getColor(){
		return $this->color;
	}
}