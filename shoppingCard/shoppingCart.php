<?php

$card = isset($_COOKIE["addTOCard"]) ? json_decode($_COOKIE["addTOCard"]) : [];

if(empty($card)){
   echo "<h3>Your cart is empty.</h3>";
}else{
    echo "<ul>";
    foreach($card as $product){
        echo "<li> " . htmlspecialchars($product) ."</li>";
    }
    echo"</ul>";
    
}

?>