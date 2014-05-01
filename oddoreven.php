<?php

class OddOrEven {

    public static function reset($ref="oddOrEven") {
        $counter = "ODDOREVEN_".$ref;
        global $$counter;
        $$counter = "even"; // 0 is even, ok
    }
    public static function get($ref="oddOrEven") {
        $counter = "ODDOREVEN_".$ref;
        global $$counter;
        if ( !isset($$counter) ) {
            OddOrEven::reset($ref);
        }
        if ( $$counter == "odd" ) {
            $$counter = "even";
        } else {
            $$counter = "odd";
        }
        return $$counter;
    }
    public static function isOdd($ref="oddOrEven"){
        return self::get($ref) == "odd";
    }
    public static function isEven($ref="oddOrEven"){
        return self::get($ref) == "even";
    }

}
