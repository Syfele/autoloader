<?php

namespace testdome\Entity;
use testdome\Model\Forme;
class Hexagone implements Forme{

	private $color;

	public function __construct($a1,$a2,$a3,$a4,$a5,$a6) {
		$this->a1 = $a1;
		$this->a2 = $a2;
		$this->a3 = $a3;
		$this->a4 = $a4;
		$this->a5 = $a5;
		$this->a6 = $a6;
	}

	public function surface() {
		return 1;
	}

	public function perimetre() {
		return $this->a1 + $this->a2 + $this->a3 + $this->a4 + $this->a5 + $this->a6;
	}

	public function setColor($color) {
		$this->color = $color;
	}

	public function getColor(){
		return $this->color;
	}
}