<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/16/2017
 * Time: 00:11
 */

namespace Core;


class Application
{

    const TEMPLATES_FOLDER = 'Views';

    public static function render($templateName, $data = null)
    {

        include self::TEMPLATES_FOLDER . '/' . $templateName . '.php';

    }


}