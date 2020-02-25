<?php

namespace autoload;

class auto {
    static public function test($name) {
        echo '[['. $name .']]';
    }
}

spl_autoload_register(__NAMESPACE__ .'\auto::test'); // С

new InexistentClass;

?>
