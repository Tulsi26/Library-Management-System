<?php

function vote($age){
        if($age>=18 && $age<=66){
            return "Yes,You can vote";
        }
        else{
            return"No, you can vote";
        }
}
echo vote(15);
?>