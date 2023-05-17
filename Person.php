<?php

class Person {
	private $name;
	private $lastname;
	private $age;
	private $mom;
	private $dad;
	//private $grandma_mom;
	//private $grandpa_mom;


	function __construct($name, $lastname, $age, $mom = null, $dad = null)
	{
	  $this -> name = $name;
	  $this -> lastname = $lastname;
	  $this -> age = $age;
	  $this -> hp = 100;
	  $this -> mom = $mom;
	  $this -> dad = $dad;

	

	}
	function sayHi($name) 
	{
		return "Hi, $name, I'm " . $this -> name;
	}
	function setHp($hp) {
		if($this->hp + $hp > 100) $this->hp = 100;
		else $this->hp = $this->hp + $hp;
		}
	function getHp() {
		return $this->hp;
	}
	function getName() {
		return $this->name;
	}
	function getLastname() {
		return $this->lastname;
	}
	function getMom() {
		return $this->mom;
	}
	function getDad() {
		return $this->dad;
	}

	function getInfo() {
		return "<h3>A few words about myself:</h3><br>" . "My name is: " . $this->getName() 
		. "<br>My lastname is: " . $this->getLastname() 
		. "<br>My father is: " . $this->getDad()->getName() 
		. "<br>My mother is: " . $this->getMom()->getName()
		. "<br>My grandmother's mother is name: ". $this->getMom()->getMom()->getName()
		. "<br>My grandmother's mother is lastname: ". $this->getMom()->getMom()->getLastname()
		. "<br>My grandfather's mother is name: ". $this->getMom()->getDad()->getName()
		. "<br>My grandfather's mother is lastname: ". $this->getMom()->getDad()->getLastname()
		. "<br>My grandmother's father is name: ". $this->getDad()->getMom()->getName()
		. "<br>My grandmother's father is lastname: ". $this->getDad()->getMom()->getLastname()
		. "<br>My grandfather's father is name: ". $this->getDad()->getDad()->getName()
		. "<br>My grandfather's father is lastname: ". $this->getDad()->getDad()->getLastname();
		
	}
}
	

$ivan = new Person("Ivan", "Ivanov", 72); //папа Ксении
$olga = new Person("Olga", "Ivanova", 70); //мама Ксении
$nikolay = new Person ("Petrov", "Nikolay", 71); //папа Игор
$larisa = new Person ("Petrova", "Larisa", 70); //мама Игор

$igor = new Person("Igor", "Petrov", 41, $larisa, $nikolay);
$ksenia = new Person("Kseniya", "Petrova", 35, $olga, $ivan);
$katy = new Person("Katy", "Petrov", 3, $ksenia, $igor);

echo $katy->getInfo();
