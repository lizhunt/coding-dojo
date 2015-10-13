<?php

// NOTE: This is an unfinished/in-progress assignment as of 10.13.15

class CardGame
{

	// Define properties
  public $pips;
  public $suits;
  public $pip;
  public $suit;
  public $deck;
  public $deal;
	
	// Magic Method to construct initial values 
	public function __construct($pip, $suit, $deal) 
	{
    $this->pips = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "Jack", "Queen", "King", "Ace");
    $this->suits = array("Diamonds", "Hearts", "Clubs", "Spades");
    $this->pip = $pip;
    $this->suit = $suit;
    $this->deck = array(); // Where we will store our full deck once it's built
    $this->hand = $deal;
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
  public function build_deck()
  {
    // This loop iterates through the $pips array  
    foreach($this->pips as $i)
    {
      // This loop iterates through the $suits array
      foreach($this->suits as $j)
      {
        // This pushes the value of $i (pips) and $j (suits) to the $deck array, which will equal 51-52
        $this->deck[] = array("specific_pip"=>$i, "specific_suit"=>$j);
      }  
    }
    // Returns our result
    return $this;
  }
  
  // Custom method
  public function shuffle_deck()
  {
    // Variable to store the current instance of $deck  
    $cards = $this->deck;

    // Empty array to store our new, shuffled instance
    $shuffled_deck = array();
    
    // Function to shuffle around the values in the current $deck instance
    shuffle($cards);

    // Iterate through the shuffled $cards and place them in our $shuffled_deck array
    foreach($cards as $row => $value)
    { 
      $shuffled_deck[] = $value;
    }  

    // Assign this instance of the deck to equal our new and improved deck
    $this->deck = $shuffled_deck;
      
    // Show us that shit  
    return $this;  

  }

  // Custom method
  public function deal_cards($number)
  {
      $this->deal = array_splice($this->deck, 0, $number, TRUE);
      return $this->deal;
  }

  // Custom method
  public function reset_deck()
  {
    unset($this->deck);
    $this->deck = array();
  }

}

class Player
{

  public $name;
  public $game;
  public $hand;

  public function __construct($name, $game, $hand)
  {
    $this->$name = $name;
    $this->game = $game;
    $this->hand = $hand;
  }

  public function call_game()
  {
    $this->game = new CardGame(0, 0, 0);
    return $this->game;

  }
  public function create_hand()
  {
    $deal = $this->deal;
    $this->hand = $deal;
    return $this->hand;
  } 
  public function draw()
  {

  } 
  public function discard()
  {

  }

}

//Define object instances
$game_1 = new CardGame(0, 0, 0);
$game_1->build_deck()->shuffle_deck()->deal_cards(8);
// $player_1 = new Player("Liz", 0, 0);
// $player_1->call_game()->create_hand();
var_dump($game_1);
//echo $game_1->shuffle();

?>
