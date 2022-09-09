<?php

for ($i = 1; $i <= 50; $i++) {
    echo $i;
    echo "<br />";

    if ($i % 3 == 0) {
        echo "Foo";
        echo "<br />";
    }

    if ($i % 5 == 0) {
        echo "Bar";
        echo "<br />";
    }

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FooBar";
        echo "<br />";
    }
}