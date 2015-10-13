<?php

class Animal
{

	// Define properties
	public $name;
	public $health;
	
	// Magic Method to construct initial values 
	public function __construct($name, $health) 
	{

    $health = 100;

		$this->name = $name;
		$this->health = $health;
	}

	// Magic Method to get the properties/attributes
	public function __get($property)
  	{
    	if (property_exists($this, $property))
    	{
      	return $this->property;
    	}
  	}

  	// Magic Method to set properties/attributes
  	public function __set($property, $value) 
  	{
    	if (property_exists($this, $property)) 
    	{
      	$this->$property = $value;
    	}
    	return $this;
  	}

    // Custom method
    public function walk() 
    {
      echo "The " . $this->name . " is walking.<br/>";
      $this->health -= 1;
      return $this;
    }

    // Custom method
    public function run() 
    {
      echo "The "  . $this->name . " is running.<br/>";
      $this->health -= 5;
      return $this;
    }


  	public function displayHealth() 
  	{
  		// echo "Name: " . $this->health . "<br/>";
      echo "The " . $this->name . "'s health is at " . $this->health . ".<br/>";
      echo "------------------------------------------------------------<br/>";	
  	}

}

class Dog extends Animal
{

  public function pet()
  {
    $health = 150;

    echo "Someone is petting the "  . $this->name . "!<br/>";
    $this->health += 5;
    return $this;
  }

}

class Dragon extends Animal
{

  public function fly()
  {
    $health = 170;

    echo "The " . $this->name . " is flying!<br/>";
    $this->health += 5;
    return $this;
  }

}


//Define object instances

$animal_1 = new Animal("Zebra", 0);
$animal_1->walk()->walk()->walk()->run()->run()->displayHealth();

$animal_2 = new Dog("Pittbull", 0);
$animal_2->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

$animal_3 = new Dragon("Red Dragon", 0);
$animal_3->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();



?>