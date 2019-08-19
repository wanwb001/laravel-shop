<?php
namespace App\Services;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/23 0023
 * Time: 下午 12:24
 */
class LogService{
    public function log($msg){
        \Log::debug('log:',['data'=>$msg]);
    }
    
}