<?php

//Here, the maximun capacity of the depot is 30 and is harcoded
//so when we see the code for first time, We don't understand what 30 means
class Deposito {
   // ... 
}

if ( $cantidad1 > 30 ) {
    // ...
}

////////////////////////////////////////////////////////////////

//Here is a suitable way to code the maximun capacity of the depot
class Deposito1 {
    public const CAPACIDAD_MAXIMA = 30;
}

if ( $cantidad > Deposito1::CAPACIDAD_MAXIMA ) {
    // ...
}

?>