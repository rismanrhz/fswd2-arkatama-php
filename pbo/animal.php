<?php 

	class Animal {
		public $name;
		public $type;

		function getinfo()
		{
			return "Hewan ini bernama $this->name dan jenisnya $this->type. ";
		}
	}

	class Cat extends Animal {
		function __construct($name)
		{
			$this->name = $name;
		}

		function getinfo()
		{
			return "Hewan ini bernama $this->name dan jenisnya $this->type adalah kucing. Kucing adalah hewan yang suka bermain dan bersih.";
		}
	}

	class Dog extends Animal {
		function getinfo()
		{
			return "Hewan ini bernama $this->name dan jenisnya $this->type adalah anjing. Anjing adalah hewan yang setia dan cerdas.";
		}
	}

	$animal = new Animal();
	$animal->name = 'Harimau';
	$animal->type = 'karnivora';
	echo $animal->getinfo();
	echo "<br>";
	$cat = new Cat('Kitty');
	echo $cat->getinfo();
	echo "<br>";
	$dog = new Dog();
	$dog->name = 'Buddy';
	echo $dog->getinfo();

?>