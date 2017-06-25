<?php
$abcL = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$abcU = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$num = array("0","1","2","3","4","5","6","7","8","9");
$char = array("!","\"","#","$","%","&","'","(",")","+",",","-",".",";","@","[","]","^","_","`","{","}","~");
 

$all = array_merge($abcL,$abcU,$num,$char);

$allSize = sizeof($all);

$passwordLength = 15;

    for($i = 0; $i < $passwordLength; $i++)
    {
        $rand = rand(0,($allSize-1));
        
        echo $all[$rand];
    }
?>
