<form method="get">
    <div>
        Input string:
        <input type="text" name="input">

    </div>

    <input type="submit" name="submit" value="Submit">

</form>



<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/30/2017
 * Time: 20:48
 */

if(isset($_GET['submit']) && (!empty($_GET['input']))){

    $array = explode(',', $_GET['input']);
    $n = count($array) / 2;

for ($i = 0; $i < $n ; $i++) {

    if($i == count($array) - 1 - $i ) {

        echo $array[$i];
    } else

    echo $array[$i]."\n".$array[count($array) - 1 - $i].'<br>';


}

}