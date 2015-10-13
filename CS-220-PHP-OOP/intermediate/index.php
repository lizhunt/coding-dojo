<?php

class Car
{

	// Define Car properties/attributes
	public $price;
	public $speed;
  public $fuel;
	public $mileage;
  public $tax;
	
	// Magic Method to construct Bike and set initial values 
	public function __construct($price, $speed, $fuel, $mileage, $tax) 
	{
		$this->price = $price;
		$this->speed = $speed;
    $this->fuel = $fuel;
		$this->mileage = $mileage;
    $this->tax = $tax;
    echo $this->Display_all();
	}

	// Magic Method ('getter') to get the properties/attributes
	public function __get($property)
  	{
    	if (property_exists($this, $property))
    	{
      	return $this->property;
    	}
  	}

  	// Magic Method ('setter') to set properties/attributes
  	public function __set($property, $value) 
  	{
    	if (property_exists($this, $property)) 
    	{
      	$this->$property = $value;
    	}
    	return $this;
  	}

    public function tax()
    {
      if($this->price > 10000)
      {
        $this->tax = 0.15; 
        echo "Tax: " . $this->tax . "<br/>";
        echo "------------------------<br/><br/>";
      }  
      else
      {
        $this->tax = 0.12;
        echo "Tax: " . $this->tax . "<br/>";
        echo "------------------------<br/><br/>";
      }
    }

  	// Method for displaying information about Car
  	public function Display_all() 
  	{
  			echo "Price: " . $this->price . "<br/>";	
  			echo "Speed: " . $this->speed . "<br/>";
        echo "Fuel: " . $this->fuel . "<br/>"; 	
  			echo "Mileage: " . $this->mileage . "<br/>";
  	}

}

//Define instances of Car
$car_1 = new Car(2000, "35mph", "Full", "15mpg", 0);
$car_1->tax();

$car_2 = new Car(2000, "5mph", "Not Full", "105mpg", 0);
$car_2->tax();

$car_3 = new Car(2000, "15mph", "Full", "25mpg", 0);
$car_3->tax();

$car_4 = new Car(2000, "45mph", "Empty", "25mpg", 0);
$car_4->tax();

$car_5 = new Car(20000000, "35mph", "Empty", "15mpg", 0);
$car_5->tax();


?>