<?php

function revertCharacters($input_str){
    $result_str = "";
    for ($i=strlen($input_str);$i>=0;$i--){
        $result_str .= substr($input_str,$i,1);
    }
    return $result_str;
}

$result = revertCharacters("Привет! Давно не виделись.");
echo $result;
