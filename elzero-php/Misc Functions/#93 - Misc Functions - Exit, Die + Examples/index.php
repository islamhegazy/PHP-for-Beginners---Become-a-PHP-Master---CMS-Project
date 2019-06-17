<?php
/*
 Misc functions:
  exit(); --> does't execute any code after that
  die(message);  --> error control && like exit()
*/
/*===================================

$name = 'islam';

echo $name;

exit();

echo  'Hello ' .$name;

===================================
*/

/*===================================
$file = 'islam.txt';

$handel = fopen($file,'r')

    or exit("Unable to find $file");
===================================
*/

    // @ use to make custome error

    $file = 'islam.txt';

    $handel = @fopen($file,'r')
    
        or exit("Unable to find $file");