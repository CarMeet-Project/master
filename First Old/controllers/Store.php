<?php

    class Store extends Controller {
        public static function doSomething() {
            self::query("SELECT * FROM producten");
        }
    }


 ?>
