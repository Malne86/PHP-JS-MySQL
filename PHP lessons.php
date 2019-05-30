<?php

printf("There are %d items in your basket", 3); // printf passes the conversion specifier (%d) to a argument value (3), in this case to present it as a decimal.
printf("There are %b items in your basket", 3); // prints it in binary format from the %b specifier.

printf("My name is %s. I'm %d years old, which is %X in hexadecimal", 'John', 33, 33); // you can have as many specifiers as long as you pass a matching number of arguments.

printf("<span style='color:#%X%X%X'>Hello</span>", 65, 127, 245); //converting from known RGB to unknown hex color code

printf("<span style='color:#%X%X%X'>Hello</span>", $r-20, $g-20, $b-20); // arguments can also pass variables or expressions, in this case stored numeric variables that are then reduced by 20 for a darker color.

?>
