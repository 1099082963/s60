<?php
namespace App\Tool;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/12
 * Time: 15:41
 */
class Result
{
    public $status;
    public $message;
    public function toJson()
    {
//        return json_encode($this);
        return $this->message;

    }
}