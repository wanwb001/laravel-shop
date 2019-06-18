<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/18 0018
 * Time: 下午 5:05
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}