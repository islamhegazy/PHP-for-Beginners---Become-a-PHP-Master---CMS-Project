<?php  

/*
   cookies: 
    السيرفر بينزل الملف في جهازك بيعرف الموق ع عليك
    saving your own information
    setcookie(name,value,expire(when it's end) ,path,domain ,secure,httponly);
    لازم يتكتب فى الاول قبل html

    setcookie(name ,value,time() - 3600); delete
*/

setcookie("islamhegazy2", "Test", time()+3600, "/"); // / --> متاح فى الموقع كله

//check if cookies is supported in browser or not

    if(count($_COOKIE) > 0 ){

        echo "Good it enabled in browser";

    }else{

        echo " Sorry the cookies are not enabled in browser please enable it for best browsing";
  
    }

?>

