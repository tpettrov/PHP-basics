<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/9/2017
 * Time: 20:55
 */

$email = "bai.ivan@mail.sf.net";
$pattern = "/^[a-zA-Z0-9\._]+\@[a-z]+(\.[a-z]+)+$/";
$result = preg_match_all($pattern, $email);
if ($result) {
    echo "Valid";
} else {
    echo "Invalid";
}
