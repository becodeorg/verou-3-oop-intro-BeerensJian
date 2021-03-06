<?php

class Beverage
{
private string $color;
private float $price;
private string $temperature;

public function __construct(string $color, float $price, string $temperature = "cold")
{
    $this-> color = $color;
    $this-> price = $price;
    $this-> temperature = $temperature;
    if ($this -> temperature == "") {
        $this -> temperature = 'cold';
    }
}

public function getInfo()
{
    echo "This beverage is {$this -> temperature} and {$this -> color}";
}

public function changePrice(float $newPrice)
{
    $this -> price = $newPrice;
}

public function displayPrice()
{
    echo "<br>" . $this ->price;
}

public function giveOpinionOnPrice()
{
    if ($this -> price < 5) {
        return "<br> Price is reasonable";
    } else {
        return "<br> Holy smokes what a ripoff";
    }
}

}

$cola = new Beverage("black", 2.0) ;
$cola -> getInfo() ;
$cola -> displayPrice();
echo $cola -> giveOpinionOnPrice();
$cola -> changePrice(420.69);
$cola -> displayPrice();
echo $cola -> giveOpinionOnPrice();
/* EXERCISE 5
Copy the class of exercise 1.
TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/