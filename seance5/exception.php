<?php
function divide($dividend, $divisor){
    if($divisor == 0){
        throw new Exception('Divisor cannot be Zero', 2538);
    }
    return $dividend/$divisor;
}

try{
    echo divide(10, 2);
}
catch(Exception $e){
    // echo "<pre>";
    // var_dump($e);
    // echo "</pre>";
    echo $e->getMessage();
    echo "<br>"; 
    echo $e->getLine();
    echo "<br>"; 
    echo $e->getCode();
    echo "<br>";
    echo $e->getFile();
    echo "<br>";
}
finally{
    echo "End operation";
}

?>