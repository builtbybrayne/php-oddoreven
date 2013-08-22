<?php

class OddOrEven {

    public static function reset($counter="oddOrEven") {
        $counter = "ODDOREVEN_".$counter;
        global $$counter;
        $$counter = "";
    }
    public static function get($counter="oddOrEven") {
        $counter = "ODDOREVEN_".$counter;
        global $$counter;
        if ( $$counter == "odd" ) {
            $$counter = "even";
        } else {
            $$counter = "odd";
        }
        return $$counter;
    }
    public static function isOdd($counter="oddOrEven"){
        return self::get("ODDOREVEN_".$counter) == "odd";
    }
    public static function isEven($counter="oddOrEven"){
        return self::get("ODDOREVEN_".$counter) == "even";
    }

}
