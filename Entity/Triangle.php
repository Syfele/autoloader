<?php
namespace testdome\Entity;
use testdome\Model\Forme;
class Triangle implements Forme {

	public $color;

	public function __construct($b, $h, $c) {
		$this->b     = $b;
		$this->h     = $h;
		$this->c     = $c;
	}

	public function surface() {
		return ($this->b * $this->h) / 2;
	}

	public function perimetre() {
		return $this->b + $this->h + $this->c;
	}

	public function setColor($color) {
		$this->color = $color;
	}

	public function getColor(){
		return $this->color;
	}
}