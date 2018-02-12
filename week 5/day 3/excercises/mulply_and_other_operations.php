<?php
function raiseValue($value, $raise_by = 1,$divide_by =1, $multiply_by=1)
{
    return ($value + $raise_by)/$divide_by*$multiply_by;
}

echo raise_value(1, 2); // 3
echo raise_value(1); // 2

?>