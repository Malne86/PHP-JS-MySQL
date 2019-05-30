<?php

// % = Display % character. %b = binary. %c = ASCII. %d = signed decimal. %e = scientific notation. %f = floating point. %o = octal. %s = string. %u = unsigned decimal. %x = lowercase hex. %X = uppercase hex.

printf("There are %d items in your basket", 3); // printf passes the conversion specifier (%d) to a argument value (3), in this case to present it as a decimal.
printf("There are %b items in your basket", 3); // prints it in binary format from the %b specifier.

printf("My name is %s. I'm %d years old, which is %X in hexadecimal", 'John', 33, 33); // you can have as many specifiers as long as you pass a matching number of arguments.

printf("<span style='color:#%X%X%X'>Hello</span>", 65, 127, 245); //converting from known RGB to unknown hex color code

printf("<span style='color:#%X%X%X'>Hello</span>", $r-20, $g-20, $b-20); // arguments can also pass variables or expressions, in this case stored numeric variables that are then reduced by 20 for a darker color.

printf("The result is: $%.2f", 123.42 / 12); // The result of this is 10.285, but %.2f assigns a floating point precision of 2 decimals while storing it accurately internally.

 echo "<pre>"; // Enables viewing of the spaces
 // Pad to 15 spaces
 printf("The result is $%15f\n", 123.42 / 12); // specify the 15 and it knows to use spaces for padding? 15 characters worth of total space padded out from the result $...0

 // Pad to 15 spaces, fill with zeros
 printf("The result is $%015f\n", 123.42 / 12); // 0 is a standin for the spaces, it only displays 6 0 in front to fill out the padded space, 3 at the end for default floating point specificity?

 // Pad to 15 spaces, 2 decimal places precision
 printf("The result is $%15.2f\n", 123.42 / 12); // as shown above but padded

 // Pad to 15 spaces, 2 decimal places precision, fill with zeros 
 printf("The result is $%015.2f\n", 123.42 / 12); // pads the front with 0 but does ten 0 because it's condensed the floating point tail and moved it ahead of the number

 // Pad to 15 spaces, 2 decimal places precision, fill with # symbol
 printf("The result is $%'#15.2f\n", 123.42 / 12); // replaces spaces with # instead of spaces or zeroes, preface alternative characters with a '.

// if the output exceeds the character padding specified, it is ignored.

?>
