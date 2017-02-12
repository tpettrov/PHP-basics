<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/12/2017
 * Time: 15:38
 */
$x = trim(fgets(STDIN));

function division($x)
{
    if (!is_numeric($x)) {
        throw new Exception('Wrong type');
    } else if ($x == 0) {
        throw new Exception('Division by zero.');
    }
    return 1 / $x;
}

try {
    echo division($x) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} finally {
    echo "Finally is always executed";
}
