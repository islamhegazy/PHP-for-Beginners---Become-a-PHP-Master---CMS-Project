<?php
/*
 Misc functions:
   sleep(seconds); --> make delay execution 
   usleep(micro second); -- 1s == 1000000 --> make delay execution 
   time_sleep_until(time() +5 ); --> Make the script sleep until the specified time
    
*/

/*
$name = "islam";
echo $name . '<br>';

//sleep(5);
usleep(5000000);

echo 'sorry forget to say anything';

*/


function checkFile (){
    if(file_exists('islam.txt')){
        echo 'Good File Is Found';
    }else{
        sleep(4);
        checkFile();
    }
}

checkFile();

