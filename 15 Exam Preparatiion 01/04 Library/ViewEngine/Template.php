<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/14/2017
 * Time: 22:38
 */

namespace ViewEngine;


class Template
{

    const TEMPLATES_FOLDER = 'Templates';

    public static function render($templateName, $data = null)
    {

        include self::TEMPLATES_FOLDER . '/' . $templateName . '.php';

    }


}