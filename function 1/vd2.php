<?php
function reverseString($srr){
    $resulft = "";
    for ($i = strlen($srr)-1;$i >= 0;$i--)
    {
        $resulft .= $srr[$i]; 
    }
    return $resulft;
}
echo reverseString('Hello World!');
?>