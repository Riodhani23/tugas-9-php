<?php
    class Matematika {
        // konstanta class
        const PHI = 3.14;

        // static member variabel
        public static $counter = 100;

        // static member function
        public static function tambakan($a,$b){ 
            return $a + $b;
        }

        // akses member variabel dari dalam class
        public static function naikanCounter() {
            self::$counter;
        }

        // akses konstanta class
        public static function luaslingkaran($jari) {
            $luas = self::PHI * $jari * $jari;
            return $luas;
        }
    }
    
?>