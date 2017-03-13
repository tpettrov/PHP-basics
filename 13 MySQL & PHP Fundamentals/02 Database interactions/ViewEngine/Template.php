<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/13/2017
 * Time: 11:11 AM
 */

namespace ViewEngine;


class Template
{

    const TEMPLATES_FOLDER = 'templates';

    public static function render($templateName, $data = null)
    {

        include self::TEMPLATES_FOLDER . '/' . $templateName . '.php';

    }


}