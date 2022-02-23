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
    public string $name;
    public float $alcoholPercentage;

    public function __construct(string $color, float $price, string $temperature , string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;

    }

    public function showPercentage()
    {
       echo $this -> alcoholPercentage;
    }
    public function getPrice()
    {
        return $this -> price;
    }
    public function getTemp()
    {
        return $this ->temperature;
    }
}

$cara = new Beer("yellow", 2, "lauw", "carapills", 4.5);

$cara->showPercentage();
echo $cara ->name . "<br>";
echo $cara -> getPrice() . "<br>" . "<br>";

$duvel = new Beer("Blonde", 3.5, "", "Duvel", 8.5);

$duvel -> showPercentage() ;
echo "<br>" . $duvel -> alcoholPercentage . "<br>";
echo $duvel -> getTemp() . "<br>";
$duvel -> getInfo();
/*





TODO: Print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/