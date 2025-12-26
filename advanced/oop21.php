<!-- Comparing Objects -->
<?php
class Planet{
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}


$e = new planet("Earth");
$e2 = $e;
$e1 = new planet("Earth");
$m = new planet("Mars");

if($e1 == $e2){
    echo "Similar Planets";
}else{
    echo "Not Similar";
}