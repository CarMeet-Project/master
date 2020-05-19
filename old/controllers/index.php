<?php

    class Index extends Controller {
        public static function doSomething() {
            self::query("SELECT * FROM producten");
        }
    }

 ?>
