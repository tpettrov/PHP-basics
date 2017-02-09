<form>

    <textarea name="input"></textarea>
    <input type="submit"/>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/9/2017
 * Time: 23:43
 */

if (isset($_GET['input'])) {

    $text = $_GET['input'];
    $string = str_replace(' ', '', $text);

    for ($i = 0; $i < strlen($string); $i++) {

        if (ord($string[$i]) % 2 == 0) {

            echo "<font color='red'>$string[$i] </font>";

        }else {

            echo "<font color='blue'>$string[$i] </font>";
        }

    }


}


