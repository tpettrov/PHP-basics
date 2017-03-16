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

    public static function render($viewName, $data = null, $data2 = null)
    {

        include self::TEMPLATES_FOLDER . '/' . $viewName . '.php';

    }


}