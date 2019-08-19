<?php
namespace App\Services;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/23 0023
 * Time: 下午 12:24
 */

class TestService{
    
    public function test($test){
        \Log::debug('test:',['data'=>$test]);
    }
    
}