<?php

function fulltNavn($fornavn,$etternavn)
    
    {$navn=$fornavn + " " + $etternavn;}

    $fornavn=$_POST ["fornavn"];
    $etternavn=$_POST ["etternavn"];

    $navn=fulltNavn($fornavn,$etternavn);

    print ("Navnet ditt er $navn");
    
?>
