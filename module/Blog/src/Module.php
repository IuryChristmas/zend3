<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 14/04/18
 * Time: 10:57
 */

namespace Blog;

class Module
{

    public function getConfig()
    {
        return include __DIR__ . "/../config/module.config.php";
    }

}