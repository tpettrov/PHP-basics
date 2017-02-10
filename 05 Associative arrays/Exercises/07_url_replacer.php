<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/10/2017
 * Time: 4:17 PM
 */

//$text = trim(fgets(STDIN));

$text = '<p>Come and visit <a href="http://softuni.bg">the Software University</a> to master the art of programming. You can always check our <a href="www.softuni.bg/forum">forum</a> if you have any questions.</p>';

$regex = '/<a href="([a-z:\/.]+)">([a-zA-z\s]+)<\/a>/';

echo preg_replace_callback($regex,function ($matches) {
    return 'aha';
}, $text);