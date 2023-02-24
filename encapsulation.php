<?php

class Person {

    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function job() {
        return 'Software developer';
    }

    public function favoriteTeam() {

    }

    private function thingsThatKeepUpAtNight() {
        return 'We are all going to die and that is terrifying.';
    }
}

$bob = new Person('Bob');

//var_dump($bob->thingsThatKeepUpAtNight()); // Error, because working - Encapsulation
var_dump($bob->job());