<?php

 setcookie("cookieExpiry" ,"hi Hadeel" ,time() + 60 ,"/")  ;

 $cookieValue = $_COOKIE["cookieExpiry"] ?? "";

 if($cookieValue !== " ")
    {
        echo "<h3>Cookie value: ".$cookieValue."</h3>";
    }else{
        echo "<h3>Cookie is not available yet or has expired.</h3>";
    }
  

echo "Refresh the page to test the cookie.";
?>
