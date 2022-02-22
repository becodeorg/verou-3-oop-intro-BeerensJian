<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require '../Exercise1.php';
/* EXERCISE 2
TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholpercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholpercentage function which returns the alocoholpercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
*/
class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct(string $color, float $price, string $temperature , string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;

    }

    public function showPercentage()
    {
        echo $this -> name . ' Has ' . $this->alcoholPercentage . "% alchohol";
    }

    private function beerInfo()
    {
        return "Hi i'm {$this -> name} and have an alochol percentage of {$this -> alcoholPercentage} and I have a {$this -> color} color.";
    }
    public function showBeerInfo()
    {
        return $this->beerInfo();
    }
}

$duvel = new Beer("Blonde", 3.5, "", "Duvel", 8.5);

$duvel -> showPercentage() ;
echo "<br>" . $duvel -> color;
$duvel -> color = "Light";
echo "<br>" . $duvel -> color;
echo "<br>" . $duvel -> showBeerInfo();



/* EXERCISE 3
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/