<!-- Detailed discussion on early and late binding -->
<?php
class Planet{
    static function echoName(){
        echo static::getName();
    }
    static function getName(){
        return "Planet";
    }
}

class Earth extends Planet{
    static function getName(){
        return "Earth";
    }
}

Planet::echoName();
echo "\n";
Earth::echoName(); 