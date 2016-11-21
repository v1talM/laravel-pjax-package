<?php
/**
 * User: Ian Vital
 * Date: 2016/11/21 0021
 * Time: 下午 6:26
 */

namespace Vital\Pjaxer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class PjaxFacade
 * @package Vital\Pjaxer\Facades
 */
class PjaxFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return "pjax";
    }
}