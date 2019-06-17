<?php  

/*
   cookies: 
    السيرفر بينزل الملف في جهازك بيعرف الموق ع عليك
    saving your own information
    setcookie(name[required],value,expire(when it's end) ,path,domain ,secure,httponly);
    لازم يتكتب فى الاول قبل html
    setcookie(name ,value,time() - 3600); delete
*/
//60*60*24 = 86400 = one day
//3600 = one houre

setcookie("groub3", "Test", time()+86400, "/", "localhost",TRUE ,TRUE ); 

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>

