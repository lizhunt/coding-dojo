<?php

class Bike
{

	// Define Bike properties/attributes
	public $type;
	public $price;
	public $max_speed;
	public $miles;
	
	// Magic Method to construct Bike and set initial values 
	public function __construct($type, $price, $max_speed, $miles) 
	{
		$this->type = $type;
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = $miles;
		echo "START RIDE FOR: " . $this->type . "<br/>";
	}

	// Magic Method ('getter') to get the properties/attributes of Bike
	public function __get($property)
  	{
    	if (property_exists($this, $property))
    	{
      		return $this->property;
    	}
  	}

  	// Magic Method ('setter') to set properties/attributes of Bike
  	public function __set($property, $value) 
  	{
    	if (property_exists($this, $property)) 
    	{
      		$this->$property = $value;
    	}
    	return $this;
  	}

  	// Method for moving Bike forward, adding miles
  	public function drive($miles) 
  	{
  		$this->miles += $miles;
  		return $this;
  	}

  	// Method for moving Bike backwards, removing miles
  	public function reverse($miles) 
  	{
  		$this->miles -= $miles;	
  		return $this;	
  	}

  	// Method for displaying information about Bike
  	public function displayInfo() 
  	{
  			echo "<br/>STATS<br/>";
  			echo "Price: " . $this->price . "<br/>";	
  			echo "Max Speed: " . $this->max_speed . "<br/>";	
  			echo "Miles: " . $this->miles . "<br/>";
  			echo "------------------------<br/><br/>";
  	}

}

//Define instances of Bike
$bike_1 = new Bike("Comfort Bike", 100, "25mph", 0);
$bike_1->drive(10)->drive(10)->drive(10)->reverse(5)->displayInfo();

$bike_2 = new Bike("Hybrid Bike", 200, "35mph", 0);
$bike_2->drive(10)->drive(10)->reverse(5)->reverse(5)->displayInfo();

$bike_3 = new Bike("Road Bike", 300, "45mph", 0);
$bike_3->reverse(5)->reverse(5)->reverse(5)->displayInfo();


?>