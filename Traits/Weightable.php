<?php

trait Weightable {
    protected $weight;
    protected $unit;

    public function setWeight(float $weight, string $unit) {
        $this->weight = $weight;
        $this->unit = $unit;
    }

    public function getWeight() {
        return $this->weight . ' ' . $this->unit;
    } 
}