<!-- property overloading -->
<?php
class MotorCycle
{
    private $displacement, $capacity, $mileage;
    function __construct($displacement, $capacity, $mileage)
    {
        $this->mileage = $mileage;
        $this->displacement = $displacement;
        $this->capacity = $capacity;
    }
    function getDisplacement()
    {
        return $this->displacement;
    }
    function setDisplacement($displacement)
    {
        $this->displacement = $displacement;
    }
    function __get($name)
    {
        echo $this->$name;
    }
}

$pulsar = new MotorCycle('150cc', '12ltr', "40kmph");
echo $pulsar->getDisplacement();
echo "\n";
echo $pulsar->displacement; // __get invoked