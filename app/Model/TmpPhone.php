<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TmpPhone extends Model
{
    //设置表名
    protected $table = 'tmp_phone';
    //关闭时间戳
    public $timestamps = false;
}
