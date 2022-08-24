








<?php  
    $n1 = 0;  
    $n2 = 1;  

    for ($num = 0;$num < 20;$num++ ) {  
        $n3 = $n2 + $n1;   
        $n1 = $n2;  
        $n2 = $n3;  
    }
?>  