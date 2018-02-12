<?php
function headline($text="sample",$nr=1){
    return "<h{$nr}>{$text}</h{$nr}>\n";

    //or a shortstroke version
    $headline=htmlspecialchars($headline);
    return sprintf("<h%d>%s<h%d>", $level,$headline,$level);
};

echo headline("Fadz");